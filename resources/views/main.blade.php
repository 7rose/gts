@extends('frame')

@section('content')

<section id="banner">
     
    <!-- Slider -->
        <div id="main-slider" class="flexslider">
            <ul class="slides">
              <li>
                <img src="img/slides/1.jpg" alt="" />
              </li>
              <li>
                <img src="img/slides/2.jpg" alt="" />
                <div class="flex-caption">
                    
                    <p>新冷通道产品</p> 
                     
                </div>
              </li>
            </ul>
        </div>
    <!-- end slider -->
 
    </section> 
    <section id="call-to-action-2">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-sm-9">
                    <h3>品质创造价值</h3>
                    <p>南京希贝元智能科技有限公司, 是一家致力于数据中心基础设备设计、生产一体化的企业。对于产品，公司秉持“工匠精神”，一丝不苟，以为用户提供坚如磐石的数据中心基础设备为目标。旗下“Guntleson”品牌，以稳定、工艺卓越著称。其系列冷通道、机柜、PDU、切换器等产品受到国内外众多客户的一致肯定。从一个小的镙丝到整齐精美的外观；从中国大地到地球另一端的西雅图，都凝聚希贝元设计、研发和市场工作人员的辛勤和专业，我们相信“品质创建价值”。</p>
                </div>
                <div class="col-md-2 col-sm-3">
                    <a href="#contact" class="btn btn-primary">马上联系</a>
                </div>
            </div>
        </div>
    </section>
    
    <section id="content">
    </section>
    <div class="container">
            <div class="row">
            <div class="col-md-12">
                <div class="aligncenter">
                    Guntleson 品牌有专业工程师和技术人员随时为您提供定制化、整体化的解决方案！ 
                </div>
                <br/>
            </div>
        </div>

     <div class="row">
            <div class="col-sm-4 info-blocks">
                <i class="icon-info-blocks fa fa-compress"></i>
                <div class="info-blocks-in">
                    <h3>按需定制</h3>
                    <p>先进的柔性制造设备、专业的团队，保证小到螺丝，大到整体钢构均可按要求生产，并全程质量控制，确保交付时效。“您的追求，我的目标！”</p>
                </div>
            </div>
            <div class="col-sm-4 info-blocks">
                <i class="icon-info-blocks fa fa-hdd-o"></i>
                <div class="info-blocks-in">
                    <h3>整体设计</h3>
                    <p>需要空间布局、走线冗余、设备搭配？太没问题了！专业的设计团队，可依据您的运营战略，设计出全套合理、省钱、美观的方案并提供全程辅助实现！</p>
                </div>
            </div>
            <div class="col-sm-4 info-blocks">
                <i class="icon-info-blocks fa fa-lightbulb-o"></i>
                <div class="info-blocks-in">
                    <h3>免费咨询</h3>
                    <p>如果您有任何商务或者产品问题，或者只是作下了解和比较，都欢迎联系我们。这些都无需费用，且除非客户要求，本公司杜绝回访、推销等行为，请您完全放心！</p>
                </div>
            </div>
        </div>

    </div>
    <div id="contact" class="container">
        
        <div class="row"> 
                            <div class="col-md-12">
                                <div class="about-logo">
                                    <h5>南京希贝元智能科技有限公司</h5>
                                    <p>南京市玄武区珠江路48号<br>
                                        电话/传真: 025-86566596<br>
                                        邮件: chris.ding@guntleson.com</p>
                                </div>  
                            </div>
                        </div>
    <div class="row">
        <div class="col-md-8">
                                    
                                    
           <!-- Form itself -->
          <form name="sentMessage" id="contactForm"  novalidate>
         <div class="control-group">
                    <div class="controls">
            <input type="text" class="form-control" 
                   placeholder="请填写称呼" id="name"/>
              <p class="help-block"></p>
           </div>
             </div>     
                <div class="control-group">
                  <div class="controls">
            <input type="email" class="form-control" placeholder="请填写邮件地址或者电话" 
                            id="email" />
        </div>
        </div>  
              
               <div class="control-group">
                 <div class="controls"><br>
                 <textarea rows="10" cols="100" class="form-control" 
                       placeholder="内容"></textarea>
        </div>
               </div>        
         <div id="success"> </div> <!-- For success/fail messages -->
              <br>
        <button type="submit" class="btn btn-primary pull-right" >发送</button><br />
          </form>
                                </div>
                                <div class="col-md-6">
                                </div>
                            </div>
    </div>
@endsection