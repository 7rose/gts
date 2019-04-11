<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kris\LaravelFormBuilder\FormBuilderTrait;
use Illuminate\Support\Facades\Storage;
use Auth;
use Log;
use File;

use App\Product;
use App\Forms\ProductForm;

class ProductController extends Controller
{
    use FormBuilderTrait;

    /**
     * 首页
     *
     */
    public function index()
    {
        return view('main');
    }

    /**
     * 机柜
     *
     */
    public function cube()
    {
        $records = Product::where('type','cube')
                            ->whereNotNull('info->img')
                            ->orderBy('order')
                            ->latest()
                            ->get();

        return view('cube', compact('records'));
    }

    /**
     * 综合布线
     *
     */
    public function cable()
    {
        $records = Product::where('type','cable')
                            ->whereNotNull('info->img')
                            ->orderBy('order')
                            ->latest()
                            ->get();

        return view('cable', compact('records'));
    }

    /**
     * 新产品
     *
     */
    public function create()
    {
        $form = $this->form(ProductForm::class, [
            'method' => 'POST',
            'url' => '/products_store'
        ]);

        $title = '产品发布';

        return view('form', compact('form','title'));
    }

    /**
     * 检查
     *
     */
    public function store (Request $request)
    {
        $form = $this->form(ProductForm::class);

        $exists = Product::where('name', $request->name)
                        ->first();

        if($exists) return redirect()->back()->withErrors(['name'=>'此产品名称已存在!'])->withInput();

        $info = [
            'name' => $request->name,
            'model' => $request->model,
            'description' => $request->description,
            'content' => $request->content,
        ];

        $order = Product::max('order');

        if(!$order) {
            $order = 1;
        }else{
            $order++;
        }

        $new = [
            'name' => $request->name,
            'type' => $request->type,
            'order' => $order,
            'info' => json_encode($info),
            'created_by' => Auth::id(),
        ];

        $record = Product::create($new);

         return view('img', compact('record'));
    }

    /**
     * 图片 
     *
     */
    public function imgStore(Request $request)
    {
        $img = $request->file('avatar');
        $extension = $img->getClientOriginalExtension();
        $id = $request->id;
        $exists = Product::find($id);

        if(!$exists) abort('404');

        Storage::disk('img')->put($id.'.'.$extension,  File::get($img));
        $exists->update(['info->img' => true]);

        echo '200';
    }

    /**
     * 排序
     *
     */
    public function sort($id, $order)
    {
        $target = Product::findOrFail($id);

        $old_order = $target->order;
        $max_order = Product::max('order');

        // 非法
        if($order > $max_order || $order < 1) abort('404');

        // 未改变排序
        if($order == $old_order) return redirect()->back();

        if($order > $old_order) {
            // 向后
            Product::whereBetween('order', [$old_order+1, $order])->decrement('order');
        }else{
            // 向前
            Product::whereBetween('order', [$order, $old_order-1])->increment('order');
        }

        $target->update(['order'=>$order]);

        return redirect()->back();
    }

    /**
     * 删除
     *
     */
    public function delete($id)
    {
        $exists = Product::find($id);

        if(!$exists) abort('404');
        Storage::disk('img')->delete($id.'.jpg');
        $exists->delete();
        return redirect()->back();
    }

    /**
     * 
     *
     */
}
















