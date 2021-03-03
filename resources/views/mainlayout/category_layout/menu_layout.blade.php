  
@extends('mainlayout.mainlayout')
 @section('css_main')
 @yield('css')
 @endsection
@section('category_page')
<div class="container mt-5">
      <div class="d-flex flex-row bd-highlight mb-3 content">
        <div class="content__left shadow-sm">
          <div class="content__left-menu">
            <p class="content__left-title">Giới thiệu</p>
            <div class="content__left-divider"></div>

            <div
              class="panel-group"
              id="accordion"
              role="tablist"
              aria-multiselectable="true"
            >
            @foreach($menu_childrent as $menuItem)
              <div class="panel panel-default mt-2">
                <div class="panel-heading" role="tab" id="headingOne">
                  <h4 class="panel-title">
                    <a
                      role="button"
                      data-toggle="collapse"
                      data-parent="#accordion"
                      href="{{URL::to('gioi-thieu',['slug'=>$menuItem->slug])}}"
                      aria-expanded="true"
                      aria-controls="collapseOne"
                    >
                      {{$menuItem->name}}
                      <span>
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          width="13"
                          height="13"
                          viewBox="0 0 24 24"
                        >
                          <path
                            d="M0 7.33l2.829-2.83 9.175 9.339 9.167-9.339 2.829 2.83-11.996 12.17z"
                          /></svg
                      ></span>
                    </a>
                  </h4>
                </div>
               
              </div>
              @endforeach
              

              <div class="d-flex flex-row justify-content-center">
                <a class="show-more-1"
                  >Show more<svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="16"
                    height="16"
                    viewBox="0 0 24 24"
                  >
                    <path
                      d="M0 7.33l2.829-2.83 9.175 9.339 9.167-9.339 2.829 2.83-11.996 12.17z"
                    /></svg
                ></a>
              </div>
            </div>
          </div>
        </div>

        <div class="content__right">
          <div class="d-flex flex-column bd-highlight">
            <div class="bd-highlight title-1">{{$menu_page->name}}</div>
            <div class="bd-highlight content__right-text">
              <p class="des-1">
             {{$menu_page->name}}
              </p>
            </div>
          </div>

          <div class="d-flex flex-column bd-highlight"></div>
        </div>
      </div>
    </div>
    

@endsection
@section('page_con')
@yield('page')
@endsection
@section('js_main')
@yield('js')
@endsection

