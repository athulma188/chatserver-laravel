@extends('layouts.chats')

@section('custom_defn')
<style type="text/css">@keyframes lds-ripple {
  0% {
    top: 96px;
    left: 96px;
    width: 0;
    height: 0;
    opacity: 1;
  }
  100% {
    top: 18px;
    left: 18px;
    width: 156px;
    height: 156px;
    opacity: 0;
  }
}
@-webkit-keyframes lds-ripple {
  0% {
    top: 96px;
    left: 96px;
    width: 0;
    height: 0;
    opacity: 1;
  }
  100% {
    top: 18px;
    left: 18px;
    width: 156px;
    height: 156px;
    opacity: 0;
  }
}
.lds-ripple {
  position: relative;
}
.lds-ripple div {
  box-sizing: content-box;
  position: absolute;
  border-width: 4px;
  border-style: solid;
  opacity: 1;
  border-radius: 50%;
  -webkit-animation: lds-ripple 1s cubic-bezier(0, 0.2, 0.8, 1) infinite;
  animation: lds-ripple 1s cubic-bezier(0, 0.2, 0.8, 1) infinite;
}
.lds-ripple div:nth-child(1) {
  border-color: #9672ff;
}
.lds-ripple div:nth-child(2) {
  border-color: #a8ff91;
  -webkit-animation-delay: -0.5s;
  animation-delay: -0.5s;
}
.lds-ripple {
  width: 200px !important;
  height: 200px !important;
  -webkit-transform: translate(-100px, -100px) scale(1) translate(100px, 100px);
  transform: translate(-100px, -100px) scale(1) translate(100px, 100px);
}
</style>

@endsection

@section('leftpane')
    <div class="lds-css ng-scope">
  <div style="width:100%;height:100%" class="lds-ripple">
    <div></div>
    <div></div>
  </div>
</div>
@endsection

@section('mainwin')
    <div class="lds-css ng-scope">
  <div style="width:100%;height:100%" class="lds-ripple">
    <div></div>
    <div></div>
  </div>
</div>
@endsection