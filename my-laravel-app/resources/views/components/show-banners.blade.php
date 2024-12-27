
<section id="section-1">
  <div class="content-slider" bis_skin_checked="1">
            <input type="radio" id="banner1" class="sec-1-input" name="banner" checked="">
      <input type="radio" id="banner2" class="sec-1-input" name="banner">
      <input type="radio" id="banner3" class="sec-1-input" name="banner">
      <input type="radio" id="banner4" class="sec-1-input" name="banner">
      <div class="slider" bis_skin_checked="1">
        @foreach($banners as $banner)
         <div id="top-banner-{{ $loop->iteration }}" class="banner" bis_skin_checked="1" style="background-image: {{ asset('storage/' . $banner->image) }}">
          <div class="banner-inner-wrapper header-text" bis_skin_checked="1">
            <div class="main-caption" bis_skin_checked="1">
              <h2>{{$banner->description}}</h2>
              <h1>{{$banner->title}}</h1>
              <div class="border-button" bis_skin_checked="1"><a href="{{$banner->buttonlink}}" bis_skin_checked="1">{{$banner->buttontext}}</a></div>
            </div>
            <div class="container" bis_skin_checked="1">
              <div class="row" bis_skin_checked="1">
                <div class="col-lg-12" bis_skin_checked="1">
                  <div class="more-info" bis_skin_checked="1">
                    <div class="row" bis_skin_checked="1">
                      <div class="col-lg-3 col-sm-6 col-6" bis_skin_checked="1">
                        <i class="fa fa-user"></i>
                        <h4><span>Population:</span><br>{{$banner->mil_people}} M</h4>
                      </div>
                      <div class="col-lg-3 col-sm-6 col-6" bis_skin_checked="1">
                        <i class="fa fa-globe"></i>
                        <h4><span>Territory:</span><br>{{$banner->kilometers}} KM<em>2</em></h4>
                      </div>
                      <div class="col-lg-3 col-sm-6 col-6" bis_skin_checked="1">
                        <i class="fa fa-home"></i>
                        <h4><span>AVG Price:</span><br>${{$banner->price}}</h4>
                      </div>
                      <div class="col-lg-3 col-sm-6 col-6" bis_skin_checked="1">
                        <div class="main-button" bis_skin_checked="1">
                          <a href="{{$banner->buttonlink2}}" bis_skin_checked="1">{{$banner->buttontext2}}</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        @endforeach
       
      </div>
      <nav>
        <div class="controls" bis_skin_checked="1">
          <label for="banner1"><span class="progressbar"><span class="progressbar-fill"></span></span><span class="text">1</span></label>
          <label for="banner2"><span class="progressbar"><span class="progressbar-fill"></span></span><span class="text">2</span></label>
          <label for="banner3"><span class="progressbar"><span class="progressbar-fill"></span></span><span class="text">3</span></label>
          <label for="banner4"><span class="progressbar"><span class="progressbar-fill"></span></span><span class="text">4</span></label>
        </div>
      </nav>
    </div>
  </section>