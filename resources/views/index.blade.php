@extends('layouts.master')
@section("content")
<div class="part1">
    <h2 class="head-one">به کافهٔ کتاب خوش آمدید</h2>
    <!-- Carousel -->
    <div
      id="carouselExampleIndicators"
      class="carousel carousel-dark slide"
      data-bs-ride="true"
    >
      <div class="carousel-indicators">
        <button
          type="button"
          data-bs-target="#carouselExampleIndicators"
          data-bs-slide-to="0"
          class="active"
          aria-current="true"
          aria-label="Slide 1"
        ></button>
        <button
          type="button"
          data-bs-target="#carouselExampleIndicators"
          data-bs-slide-to="1"
          aria-label="Slide 2"
        ></button>
        <button
          type="button"
          data-bs-target="#carouselExampleIndicators"
          data-bs-slide-to="2"
          aria-label="Slide 3"
        ></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="mitems">
            <div class="item1">
              <img src="{{ URL::asset('assets/images/ebook.svg') }}" alt="ebook" class="ebook" />
              <div>
                <h5 class="interest-text">
                  کتاب مورد علاقهٔ تان را آنلاین بخوانید
                </h5>
                <p>صد ها کتاب را آنلاین اینجا دریابید.</p>
              </div>
            </div>

            <div class="item1">
              <img
              src="{{ URL::asset('assets/images/icons8-books-96.png') }}"
                alt="ebook"
                class="ebook"
              />
              <div>
                <h5 class="interest-text">
                  کتاب مورد علاقهٔ تان را آنلاین بخوانید
                </h5>
                <p>صد ها کتاب را آنلاین اینجا دریابید.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="mitems">
            <div class="item1">
              <img src="{{ URL::asset('assets/images/ebook.svg') }}" alt="ebook" class="ebook" />
              <div>
                <h5 class="interest-text">
                  کتاب مورد علاقهٔ تان را آنلاین بخوانید
                </h5>
                <p>صد ها کتاب را آنلاین اینجا دریابید.</p>
              </div>
            </div>

            <div class="item1">
              <img
                src="{{ URL::asset('assets/images/icons8-books-96.png') }}"
                alt="ebook"
                class="ebook"
              />
              <div>
                <h5 class="interest-text">
                  کتاب مورد علاقهٔ تان را آنلاین بخوانید
                </h5>
                <p>صد ها کتاب را آنلاین اینجا دریابید.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="mitems">
            <div class="item1">
              <img src="{{ URL::asset('assets/images/ebook.svg') }}" alt="ebook" class="ebook" />
              <div>
                <h5 class="interest-text">
                  کتاب مورد علاقهٔ تان را آنلاین بخوانید
                </h5>
                <p>صد ها کتاب را آنلاین اینجا دریابید.</p>
              </div>
            </div>

            <div class="item1">
              <img
                src="{{ URL::asset('assets/images/icons8-books-96.png') }}"
                alt="ebook"
                class="ebook"
              />
              <div>
                <h5 class="interest-text">
                  کتاب مورد علاقهٔ تان را آنلاین بخوانید
                </h5>
                <p>صد ها کتاب را آنلاین اینجا دریابید.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <button
        class="carousel-control-prev"
        type="button"
        data-bs-target="#carouselExampleIndicators"
        data-bs-slide="prev"
      >
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button
        class="carousel-control-next"
        type="button"
        data-bs-target="#carouselExampleIndicators"
        data-bs-slide="next"
      >
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>

  <div class="part2">
    <h2 class="bestbook head-one">کتاب های برتر</h2>
    <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="10000">
         
          <!-- Bootstrap Card -->
          <div class="row row-design">
              <div class="card  col-lg-4" style="width: 15rem;">
                  <img src="{{ url::asset('books/covers/sad-sal-tanhayee.jpg') }}" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">صد سال تنهایی</h5>
                    <p class="card-text">اثری از گابریل گارسیا مارکز</p>
                  </div>
                  <div class="card-body">
                    <a href="#" class="btn btn-outline-warning">مطالعه</a>
                    <a href="#" class="btn btn-outline-warning">ذخیره</a>
                  </div>
              </div>
              
              <div class="card  col-lg-4" style="width: 15rem;">
                <img src="{{ url::asset('books/covers/pandp.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">غرور و تعصب</h5>
                  <p class="card-text">اثری از جین آستین</p>
                </div>
                <div class="card-body">
                  <a href="#" class="btn btn-outline-warning">مطالعه</a>
                  <a href="#" class="btn btn-outline-warning">ذخیره</a>
                </div>
            </div>
            <div class="card  col-lg-4" style="width: 15rem;">
              <img src="{{ url::asset('books/covers/tawon.jpg') }}" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">طاعون</h5>
                <p class="card-text">اثری از آلبر کامو</p>
              </div>
              <div class="card-body">
                <a href="#" class="btn btn-outline-warning">مطالعه</a>
                <a href="#" class="btn btn-outline-warning">ذخیره</a>
              </div>
          </div>
          </div>
        </div>
        <div class="carousel-item" data-bs-interval="2000">
          <div class="row row-design">
            <div class="card  col-lg-4" style="width: 15rem;">
                <img src="{{ url::asset('books/covers/sad-sal-tanhayee.jpg') }}"  class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">صد سال تنهایی</h5>
                  <p class="card-text">اثری از گابریل گارسیا مارکز</p>
                </div>
                <div class="card-body">
                  <a href="#" class="btn btn-outline-warning">مطالعه</a>
                  <a href="#" class="btn btn-outline-warning">ذخیره</a>
                </div>
            </div>
            
            <div class="card  col-lg-4" style="width: 15rem;">
              <img src="{{ url::asset('books/covers/pandp.jpg') }}" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">غرور و تعصب</h5>
                <p class="card-text">اثری از جین آستین</p>
              </div>
              <div class="card-body">
                <a href="#" class="btn btn-outline-warning">مطالعه</a>
                <a href="#" class="btn btn-outline-warning">ذخیره</a>
              </div>
          </div>
          <div class="card  col-lg-4" style="width: 15rem;">
            <img src="{{ url::asset('books/covers/tawon.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">طاعون</h5>
              <p class="card-text">اثری از آلبر کامو</p>
            </div>
            <div class="card-body">
              <a href="#" class="btn btn-outline-warning">مطالعه</a>
              <a href="#" class="btn btn-outline-warning">ذخیره</a>
            </div>
        </div>
        </div>
        </div>
        <div class="carousel-item">
          <div class="row row-design">
            <div class="card  col-lg-4" style="width: 15rem;">
                <img src="{{ url::asset('books/covers/sad-sal-tanhayee.jpg') }}"class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">صد سال تنهایی</h5>
                  <p class="card-text">اثری از گابریل گارسیا مارکز</p>
                </div>
                <div class="card-body">
                  <a href="#" class="btn btn-outline-warning">مطالعه</a>
                  <a href="#" class="btn btn-outline-warning">ذخیره</a>
                </div>
            </div>
            
            <div class="card  col-lg-4" style="width: 15rem;">
              <img src="{{ url::asset('books/covers/pandp.jpg') }}" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">غرور و تعصب</h5>
                <p class="card-text">اثری از جین آستین</p>
              </div>
              <div class="card-body">
                <a href="#" class="btn btn-outline-warning">مطالعه</a>
                <a href="#" class="btn btn-outline-warning">ذخیره</a>
              </div>
          </div>
          <div class="card  col-lg-4" style="width: 15rem;">
            <img src="{{ url::asset('books/covers/tawon.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">طاعون</h5>
              <p class="card-text">اثری از آلبر کامو</p>
            </div>
            <div class="card-body">
              <a href="#" class="btn btn-outline-warning">مطالعه</a>
              <a href="#" class="btn btn-outline-warning">ذخیره</a>
            </div>
        </div>
        </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>

  <div class="part3">
    <h2 class="bestbook head-one">کتاب های کلاسیک</h2>
    <div id="carouselExample" class="carousel carousel-dark slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="10000">
         
          <!-- Bootstrap Card -->
          <div class="row row-design">
              <div class="card  col-lg-4" style="width: 15rem;">
                  <img src="{{ url::asset('books/covers/sad-sal-tanhayee.jpg') }}" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">صد سال تنهایی</h5>
                    <p class="card-text">اثری از گابریل گارسیا مارکز</p>
                  </div>
                  <div class="card-body">
                    <a href="#" class="btn btn-outline-warning">مطالعه</a>
                    <a href="#" class="btn btn-outline-warning">ذخیره</a>
                  </div>
              </div>
              
              <div class="card  col-lg-4" style="width: 15rem;">
                <img src="{{ url::asset('books/covers/pandp.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">غرور و تعصب</h5>
                  <p class="card-text">اثری از جین آستین</p>
                </div>
                <div class="card-body">
                  <a href="#" class="btn btn-outline-warning">مطالعه</a>
                  <a href="#" class="btn btn-outline-warning">ذخیره</a>
                </div>
            </div>
            <div class="card  col-lg-4" style="width: 15rem;">
              <img src="{{ url::asset('books/covers/tawon.jpg') }}" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">طاعون</h5>
                <p class="card-text">اثری از آلبر کامو</p>
              </div>
              <div class="card-body">
                <a href="#" class="btn btn-outline-warning">مطالعه</a>
                <a href="#" class="btn btn-outline-warning">ذخیره</a>
              </div>
          </div>
          </div>
        </div>
        <div class="carousel-item" data-bs-interval="2000">
          <div class="row row-design">
            <div class="card  col-lg-4" style="width: 15rem;">
                <img src="{{ url::asset('books/covers/sad-sal-tanhayee.jpg') }} "class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">صد سال تنهایی</h5>
                  <p class="card-text">اثری از گابریل گارسیا مارکز</p>
                </div>
                <div class="card-body">
                  <a href="#" class="btn btn-outline-warning">مطالعه</a>
                  <a href="#" class="btn btn-outline-warning">ذخیره</a>
                </div>
            </div>
            
            <div class="card  col-lg-4" style="width: 15rem;">
              <img src="{{ url::asset('books/covers/pandp.jpg') }}" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">غرور و تعصب</h5>
                <p class="card-text">اثری از جین آستین</p>
              </div>
              <div class="card-body">
                <a href="#" class="btn btn-outline-warning">مطالعه</a>
                <a href="#" class="btn btn-outline-warning">ذخیره</a>
              </div>
          </div>
          <div class="card  col-lg-4" style="width: 15rem;">
            <img src="{{ url::asset('books/covers/tawon.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">طاعون</h5>
              <p class="card-text">اثری از آلبر کامو</p>
            </div>
            <div class="card-body">
              <a href="#" class="btn btn-outline-warning">مطالعه</a>
              <a href="#" class="btn btn-outline-warning">ذخیره</a>
            </div>
        </div>
        </div>
        </div>
        <div class="carousel-item">
          <div class="row row-design">
            <div class="card  col-lg-4" style="width: 15rem;">
                <img src="{{ url::asset('books/covers/sad-sal-tanhayee.jpg') }} "class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">صد سال تنهایی</h5>
                  <p class="card-text">اثری از گابریل گارسیا مارکز</p>
                </div>
                <div class="card-body">
                  <a href="#" class="btn btn-outline-warning">مطالعه</a>
                  <a href="#" class="btn btn-outline-warning">ذخیره</a>
                </div>
            </div>
            
            <div class="card  col-lg-4" style="width: 15rem;">
              <img src="{{ url::asset('books/covers/pandp.jpg') }}" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">غرور و تعصب</h5>
                <p class="card-text">اثری از جین آستین</p>
              </div>
              <div class="card-body">
                <a href="#" class="btn btn-outline-warning">مطالعه</a>
                <a href="#" class="btn btn-outline-warning">ذخیره</a>
              </div>
          </div>
          <div class="card  col-lg-4" style="width: 15rem;">
            <img src="{{ url::asset('books/covers/tawon.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">طاعون</h5>
              <p class="card-text">اثری از آلبر کامو</p>
            </div>
            <div class="card-body">
              <a href="#" class="btn btn-outline-warning">مطالعه</a>
              <a href="#" class="btn btn-outline-warning">ذخیره</a>
            </div>
        </div>
        </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>

  <div class="part4">
    <h2 class="bestbook head-one">کتاب های رومان</h2>
    <div id="carousel" class="carousel carousel-dark slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="10000">
         
          <!-- Bootstrap Card -->
          <div class="row row-design">
              <div class="card  col-lg-4" style="width: 15rem;">
                  <img src="{{ url::asset('books/covers/sad-sal-tanhayee.jpg') }}" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">صد سال تنهایی</h5>
                    <p class="card-text">اثری از گابریل گارسیا مارکز</p>
                  </div>
                  <div class="card-body">
                    <a href="#" class="btn btn-outline-warning">مطالعه</a>
                    <a href="#" class="btn btn-outline-warning">ذخیره</a>
                  </div>
              </div>
              
              <div class="card  col-lg-4" style="width: 15rem;">
                <img src="{{ url::asset('books/covers/pandp.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">غرور و تعصب</h5>
                  <p class="card-text">اثری از جین آستین</p>
                </div>
                <div class="card-body">
                  <a href="#" class="btn btn-outline-warning">مطالعه</a>
                  <a href="#" class="btn btn-outline-warning">ذخیره</a>
                </div>
            </div>
            <div class="card  col-lg-4" style="width: 15rem;">
              <img src="{{ url::asset('books/covers/tawon.jpg') }}" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">طاعون</h5>
                <p class="card-text">اثری از آلبر کامو</p>
              </div>
              <div class="card-body">
                <a href="#" class="btn btn-outline-warning">مطالعه</a>
                <a href="#" class="btn btn-outline-warning">ذخیره</a>
              </div>
          </div>
          </div>
        </div>
        <div class="carousel-item" data-bs-interval="2000">
          <div class="row row-design">
            <div class="card  col-lg-4" style="width: 15rem;">
                <img src="{{ url::asset('books/covers/sad-sal-tanhayee.jpg') }} "class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">صد سال تنهایی</h5>
                  <p class="card-text">اثری از گابریل گارسیا مارکز</p>
                </div>
                <div class="card-body">
                  <a href="#" class="btn btn-outline-warning">مطالعه</a>
                  <a href="#" class="btn btn-outline-warning">ذخیره</a>
                </div>
            </div>
            
            <div class="card  col-lg-4" style="width: 15rem;">
              <img src="{{ url::asset('books/covers/pandp.jpg') }}" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">غرور و تعصب</h5>
                <p class="card-text">اثری از جین آستین</p>
              </div>
              <div class="card-body">
                <a href="#" class="btn btn-outline-warning">مطالعه</a>
                <a href="#" class="btn btn-outline-warning">ذخیره</a>
              </div>
          </div>
          <div class="card  col-lg-4" style="width: 15rem;">
            <img src="{{ url::asset('books/covers/tawon.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">طاعون</h5>
              <p class="card-text">اثری از آلبر کامو</p>
            </div>
            <div class="card-body">
              <a href="#" class="btn btn-outline-warning">مطالعه</a>
              <a href="#" class="btn btn-outline-warning">ذخیره</a>
            </div>
        </div>
        </div>
        </div>
        <div class="carousel-item">
          <div class="row row-design">
            <div class="card  col-lg-4" style="width: 15rem;">
                <img src="{{ url::asset('books/covers/sad-sal-tanhayee.jpg') }} "class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">صد سال تنهایی</h5>
                  <p class="card-text">اثری از گابریل گارسیا مارکز</p>
                </div>
                <div class="card-body">
                  <a href="#" class="btn btn-outline-warning">مطالعه</a>
                  <a href="#" class="btn btn-outline-warning">ذخیره</a>
                </div>
            </div>
            
            <div class="card  col-lg-4" style="width: 15rem;">
              <img src="{{ url::asset('books/covers/pandp.jpg') }}" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">غرور و تعصب</h5>
                <p class="card-text">اثری از جین آستین</p>
              </div>
              <div class="card-body">
                <a href="#" class="btn btn-outline-warning">مطالعه</a>
                <a href="#" class="btn btn-outline-warning">ذخیره</a>
              </div>
          </div>
          <div class="card  col-lg-4" style="width: 15rem;">
            <img src="{{ url::asset('books/covers/tawon.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">طاعون</h5>
              <p class="card-text">اثری از آلبر کامو</p>
            </div>
            <div class="card-body">
              <a href="#" class="btn btn-outline-warning">مطالعه</a>
              <a href="#" class="btn btn-outline-warning">ذخیره</a>
            </div>
        </div>
        </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>

  <div class="part5">
    <h2 class="bestbook head-one">کتاب های اطفال</h2>
    <div id="carouselExam" class="carousel carousel-dark slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExam" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExam" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExam" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="10000">
         
          <!-- Bootstrap Card -->
          <div class="row row-design">
              <div class="card  col-lg-4" style="width: 15rem;">
                  <img src="{{ url::asset('books/covers/sad-sal-tanhayee.jpg') }} " class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">صد سال تنهایی</h5>
                    <p class="card-text">اثری از گابریل گارسیا مارکز</p>
                  </div>
                  <div class="card-body">
                    <a href="#" class="btn btn-outline-warning">مطالعه</a>
                    <a href="#" class="btn btn-outline-warning">ذخیره</a>
                  </div>
              </div>
              
              <div class="card  col-lg-4" style="width: 15rem;">
                <img src="{{ url::asset('books/covers/pandp.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">غرور و تعصب</h5>
                  <p class="card-text">اثری از جین آستین</p>
                </div>
                <div class="card-body">
                  <a href="#" class="btn btn-outline-warning">مطالعه</a>
                  <a href="#" class="btn btn-outline-warning">ذخیره</a>
                </div>
            </div>
            <div class="card  col-lg-4" style="width: 15rem;">
              <img src="{{ url::asset('books/covers/tawon.jpg') }}" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">طاعون</h5>
                <p class="card-text">اثری از آلبر کامو</p>
              </div>
              <div class="card-body">
                <a href="#" class="btn btn-outline-warning">مطالعه</a>
                <a href="#" class="btn btn-outline-warning">ذخیره</a>
              </div>
          </div>
          </div>
        </div>
        <div class="carousel-item" data-bs-interval="2000">
          <div class="row row-design">
            <div class="card  col-lg-4" style="width: 15rem;">
                <img src="{{ url::asset('books/covers/sad-sal-tanhayee.jpg') }} "class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">صد سال تنهایی</h5>
                  <p class="card-text">اثری از گابریل گارسیا مارکز</p>
                </div>
                <div class="card-body">
                  <a href="#" class="btn btn-outline-warning">مطالعه</a>
                  <a href="#" class="btn btn-outline-warning">ذخیره</a>
                </div>
            </div>
            
            <div class="card  col-lg-4" style="width: 15rem;">
              <img src="{{ url::asset('books/covers/pandp.jpg') }}" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">غرور و تعصب</h5>
                <p class="card-text">اثری از جین آستین</p>
              </div>
              <div class="card-body">
                <a href="#" class="btn btn-outline-warning">مطالعه</a>
                <a href="#" class="btn btn-outline-warning">ذخیره</a>
              </div>
          </div>
          <div class="card  col-lg-4" style="width: 15rem;">
            <img src="{{ url::asset('books/covers/tawon.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">طاعون</h5>
              <p class="card-text">اثری از آلبر کامو</p>
            </div>
            <div class="card-body">
              <a href="#" class="btn btn-outline-warning">مطالعه</a>
              <a href="#" class="btn btn-outline-warning">ذخیره</a>
            </div>
        </div>
        </div>
        </div>
        <div class="carousel-item">
          <div class="row row-design">
            <div class="card  col-lg-4" style="width: 15rem;">
                <img <img src="{{ url::asset('books/covers/sad-sal-tanhayee.jpg') }} " class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">صد سال تنهایی</h5>
                  <p class="card-text">اثری از گابریل گارسیا مارکز</p>
                </div>
                <div class="card-body">
                  <a href="#" class="btn btn-outline-warning">مطالعه</a>
                  <a href="#" class="btn btn-outline-warning">ذخیره</a>
                </div>
            </div>
            
            <div class="card  col-lg-4" style="width: 15rem;">
              <img src="{{ url::asset('books/covers/pandp.jpg') }}" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">غرور و تعصب</h5>
                <p class="card-text">اثری از جین آستین</p>
              </div>
              <div class="card-body">
                <a href="#" class="btn btn-outline-warning">مطالعه</a>
                <a href="#" class="btn btn-outline-warning">ذخیره</a>
              </div>
          </div>
          <div class="card  col-lg-4" style="width: 15rem;">
            <img src="{{ url::asset('books/covers/tawon.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">طاعون</h5>
              <p class="card-text">اثری از آلبر کامو</p>
            </div>
            <div class="card-body">
              <a href="#" class="btn btn-outline-warning">مطالعه</a>
              <a href="#" class="btn btn-outline-warning">ذخیره</a>
            </div>
        </div>
        </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExam" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExam" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>

  <div class="category">
    <h2 class="bestbook head-one ct">کتگوری</h2>
      <div class="category-container">
          <div>
            <i class="fa-regular fa-star cnt"></i>
            <h5 class="cat-head">کتاب های برتر</h5>
            <p class="cnt">۱۳ جلد</p>
          </div>
          <div>
            <img src="{{ url::asset('assets/images/icons8-historical-40.png') }}"
           class="cnt" alt="sand-clock">
            <h5 class="cat-head">کتاب های کلاسیک</h5>
            <p class="cnt">۱۲ جلد</p>
          </div>
          <div>
            <img src="{{ url::asset('assets/images/icons8-heart-suit-48.png') }}" 
             class="cnt" alt="sand-clock">
            <h5 class="cat-head">کتاب های رومان</h5>
            <p class="cnt">۸ جلد</p>
          </div>
          <div>
            <img src="{{ url::asset('assets/images/icons8-children-48.png') }}" 
              class="cnt" alt="sand-clock">
            <h5 class="cat-head">کتاب های اطفال</h5>
            <p class="cnt">۱۰ جلد</p>
          </div>
      </div>
  </div>

  <div class="footer">
      <div class="footer-content">
        <div class="footer-details">
          <i class="fa-solid fa-circle-info"></i>
          <h5>دربارهٔ ما</h5>
        </div>
        <div class="con">
            <div class="footer-details">
            <i class="fa-solid fa-address-card"></i>
            <h5>ارتباط با ما</h5>
            </div>
            <div class="m-icons">
              <i class="fa-brands fa-twitter"></i>
              <i class="fa-brands fa-whatsapp"></i>
              <i class="fa-brands fa-github"></i>
            </div>
            <p class="pfooter">Copyright 2023&#169;</p>
        </div>
        <div class="footer-details">
          <i class="fa-solid fa-circle-question"></i>
          <h5>سوالات متداول</h5>
        </div>
      </div>
  </div>
@endsection