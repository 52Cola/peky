@extends('weui.layout')

@section('title')
会员中心
@endsection

@section('content')
<!--主体-->
<div class='weui-content'>
  <div class="wy-center-top">
    <div class="weui-media-box weui-media-box_appmsg">
      <div class="weui-media-box__hd"><img class="weui-media-box__thumb radius" src="upload/yonghu.jpg" alt=""></div>
      <div class="weui-media-box__bd">
        <h4 class="weui-media-box__title user-name">
        @if($data)
          {{ $data }}
        @else
          <a href="/weui/Login">还未登陆，请先登陆</a>
        @endif
        </h4>
        <p class="user-grade">等级：普通会员</p>
        <p class="user-integral">待返还金额：<em class="num">500.0</em>元</p>
      </div>
    </div>
    
    <div class="xx-menu weui-flex">
      <div class="weui-flex__item"><div class="xx-menu-list"><em>987</em><p>账户余额</p></div></div>
      <div class="weui-flex__item"><div class="xx-menu-list"><em>459</em><p>我的蓝豆</p></div></div>
      <div class="weui-flex__item"><div class="xx-menu-list"><em>4</em><p>收藏商品</p></div></div>
    </div>
  </div>

  <div class="weui-panel weui-panel_access">
    <div class="weui-panel__hd">
      <a href="all_orders.html" class="weui-cell weui-cell_access center-alloder">
        <div class="weui-cell__bd wy-cell">
          <div class="weui-cell__hd"><img src="images/center-icon-order-all.png" alt="" class="center-list-icon"></div>
          <div class="weui-cell__bd weui-cell_primary"><p class="center-list-txt">全部订单</p></div>
        </div>
        <span class="weui-cell__ft"></span>
      </a>   
    </div>
    <div class="weui-panel__bd">
      <div class="weui-flex">
        <div class="weui-flex__item">
          <a href="all_orders.html" class="center-ordersModule">
            <span class="weui-badge" style="position: absolute;top:5px;right:10px; font-size:10px;">2</span>
            <div class="imgicon"><img src="images/center-icon-order-dfk.png" /></div>
            <div class="name">待付款</div>
          </a>
        </div>
        <div class="weui-flex__item">
          <a href="all_orders.html" class="center-ordersModule">
            <span class="weui-badge" style="position: absolute;top:5px;right:10px; font-size:10px;">1</span>
            <div class="imgicon"><img src="images/center-icon-order-dfh.png" /></div>
            <div class="name">待发货</div>
          </a>
        </div>
        <div class="weui-flex__item">
          <a href="all_orders.html" class="center-ordersModule">
            <div class="imgicon"><img src="images/center-icon-order-dsh.png" /></div>
            <div class="name">待收货</div>
          </a>
        </div>
        <div class="weui-flex__item">
          <a href="orders.html" class="center-ordersModule">
            <span class="weui-badge" style="position: absolute;top:5px;right:10px; font-size:10px;">2</span>
            <div class="imgicon"><img src="images/center-icon-order-dpj.png" /></div>
            <div class="name">待评价</div>
          </a>
        </div>
      </div>
    </div>
  </div>
  
  <div class="weui-panel weui-panel_access">
    <div class="weui-panel__hd">
      <a href="myburse.html" class="weui-cell weui-cell_access center-alloder">
        <div class="weui-cell__bd wy-cell">
          <div class="weui-cell__hd"><img src="images/center-icon-jk.png" alt="" class="center-list-icon"></div>
          <div class="weui-cell__bd weui-cell_primary"><p class="center-list-txt">我的小金库</p></div>
        </div>
        <span class="weui-cell__ft"></span>
      </a>   
    </div>
    <div class="weui-panel__bd">
      <div class="weui-flex">
        <div class="weui-flex__item">
          <a href="myburse.html" class="center-ordersModule">
            <div class="center-money"><em>800.0</em></div>
            <div class="name">账户总额</div>
          </a>
        </div>
        <div class="weui-flex__item">
          <a href="myburse.html" class="center-ordersModule">
            <div class="center-money"><em>50.0</em></div>
            <div class="name">返现金额</div>
          </a>
        </div>
        <div class="weui-flex__item">
          <a href="myburse.html" class="center-ordersModule">
            <div class="center-money"><em>550.0</em></div>
            <div class="name">待返还</div>
          </a>
        </div>
        <div class="weui-flex__item">
          <a href="myburse.html" class="center-ordersModule">
            <div class="center-money"><em>165</em></div>
            <div class="name">蓝豆</div>
          </a>
        </div>
      </div>
    </div>
  </div>
  
  
  <div class="weui-panel">
        <div class="weui-panel__bd">
          <div class="weui-media-box weui-media-box_small-appmsg">
            <div class="weui-cells">
              <a class="weui-cell weui-cell_access" href="record.html">
                <div class="weui-cell__hd"><img src="images/center-icon-jyjl.png" alt="" class="center-list-icon"></div>
                <div class="weui-cell__bd weui-cell_primary">
                  <p class="center-list-txt">交易记录</p>
                </div>
                <span class="weui-cell__ft"></span>
              </a>
              <a class="weui-cell weui-cell_access" href="/weui/mycoller">
                <div class="weui-cell__hd"><img src="images/center-icon-sc.png" alt="" class="center-list-icon"></div>
                <div class="weui-cell__bd weui-cell_primary">
                  <p class="center-list-txt">我的收藏</p>
                </div>
                <span class="weui-cell__ft"></span>
              </a>
              <a class="weui-cell weui-cell_access" href="/weui/address_list">
                <div class="weui-cell__hd"><img src="images/center-icon-dz.png" alt="" class="center-list-icon"></div>
                <div class="weui-cell__bd weui-cell_primary">
                  <p class="center-list-txt">地址管理</p>
                </div>
                <span class="weui-cell__ft"></span>
              </a>
              <a class="weui-cell weui-cell_access" href="card.html">
                <div class="weui-cell__hd"><img src="images/center-icon-yhk.png" alt="" class="center-list-icon"></div>
                <div class="weui-cell__bd weui-cell_primary">
                  <p class="center-list-txt">我的银行卡</p>
                </div>
                <span class="weui-cell__ft"></span>
              </a>
              <a class="weui-cell weui-cell_access" href="password.html">
                <div class="weui-cell__hd"><img src="images/center-icon-dlmm.png" alt="" class="center-list-icon"></div>
                <div class="weui-cell__bd weui-cell_primary">
                  <p class="center-list-txt">密码修改</p>
                </div>
                <span class="weui-cell__ft"></span>
              </a>
              <a class="weui-cell weui-cell_access" href='/weui/quit'>
                <div class="weui-cell__hd"><img src="images/center-icon-out.png" alt="" class="center-list-icon"></div>
                <div class="weui-cell__bd weui-cell_primary">
                  <p class="center-list-txt">退出账号</p>
                </div>
                <span class="weui-cell__ft"></span>
              </a>
            </div>
          </div>
        </div>
      </div>
</div>


<script src="lib/jquery-2.1.4.js"></script> 
<script src="lib/fastclick.js"></script> 
<script>
  $(function() {
    FastClick.attach(document.body);
  });
</script> 
<script src="js/jquery-weui.js"></script>

@endsection