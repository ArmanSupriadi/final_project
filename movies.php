<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Video Streaming</title>
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
  <!-- i will provide this in description  -->
  <link rel="stylesheet" href="css/slick.css" />
  <link rel="stylesheet" href="css/slick-theme.css" />
  <link rel="stylesheet" href="css/owl.carousel.min.css" />
  <link rel="stylesheet" href="css/animate.min.css" />
  <link rel="stylesheet" href="css/magnific-popup.css" />
  <link rel="stylesheet" href="css/select2.min.css" />
  <link rel="stylesheet" href="css/select2-bootstrap4.min.css" />

  <link rel="stylesheet" href="css/slick-animation.css" />
  <link rel="stylesheet" href="style.css" />
</head>

<body>
  <header id="main-header">
    <div class="main-header">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-12">
            <nav class="navbar navbar-expand-lg navbar-light p-0 ">
              <a href="#" class="navbar-toggler c-toggler" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <div class="navbar-toggler-icon" data-toggle="collapse">
                  <span class="navbar-menu-icon navbar-menu-icon--top"></span>
                  <span class="navbar-menu-icon navbar-menu-icon--middle"></span>
                  <span class="navbar-menu-icon navbar-menu-icon--bottom"></span>
                </div>
              </a>
                <a href="index.php" class="navbar-brand">
                    <img src="images/logo.png" class="img-fluid logo" alt="" />
                </a>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div class="menu-main-menu-container">
                  <ul id="top-menu" class="navbar-nav ml-auto">
                    <li class="menu-item"><a href="index.php">Home</a></li>
                    <li class="menu-item active"><a href="movies.php">Movies</a></li>
                    <li class="menu-item"><a href="#">About Us</a></li>
                  </ul>
                </div>
              </div>
              <div class="mobile-more-menu">
                <a href="javascript:void(0);" class="more-toggle" id="dropdownMenuButton" data-toggle="more-toggle"
                  aria-haspopup="true" aria-expanded="false">
                  <i class="fa fa-ellipsis-h"></i>
                </a>
                <div class="more-menu" aria-labelledby="dropdownMenuButton">
                  <div class="navbar-right position-relative">
                    <ul class="d-flex align-items-center justify-content-end list-inline m-0">
                      <li>
                        <a href="#" class="search-toggle">
                          <i class="fa fa-search"></i>
                        </a>
                        <div class="search-box iq-search-bar">
                          <form action="#" class="searchbox">
                            <div class="form-group position-relative">
                              <input type="text" class="text search-input font-size-12"
                                placeholder="type here to search..." />
                              <i class="search-link fa fa-search"></i>
                            </div>
                          </form>
                        </div>
                      </li>
                        <a href="#" class="iq-user-dropdown search-toggle d-flex align-items-center">
                          <img src="images/user/user.png" class="img-fluid user-m rounded-circle" alt="" />
                        </a>
                        <div class="iq-sub-dropdown iq-user-dropdown">
                          <div class="iq-card shadow-none m-0">
                            <div class="iq-card-body p-0 pl-3 pr-3">
                              <a href="#" class="iq-sub-card setting-dropdown">
                                <div class="media align-items-center">
                                  <div class="right-icon">
                                    <i class="fa fa-user text-primary"></i>
                                  </div>
                                  <div class="media-body ml-3">
                                    <h6 class="mb-0">Manage Profile</h6>
                                  </div>
                                </div>
                              </a>
                              <a href="#" class="iq-sub-card setting-dropdown">
                                <div class="media align-items-center">
                                  <div class="right-icon">
                                    <i class="fa fa-cog text-primary"></i>
                                  </div>
                                  <div class="media-body ml-3">
                                    <h6 class="mb-0">Settings</h6>
                                  </div>
                                </div>
                              </a>
                              <a href="#" class="iq-sub-card setting-dropdown">
                                <div class="media align-items-center">
                                  <div class="right-icon">
                                    <i class="fa fa-inr text-primary"></i>
                                  </div>
                                  <div class="media-body ml-3">
                                    <h6 class="mb-0">Pricing Plan</h6>
                                  </div>
                                </div>
                              </a>
                              <a href="#" class="iq-sub-card setting-dropdown">
                                <div class="media align-items-center">
                                  <div class="right-icon">
                                    <i class="fa fa-sign-out text-primary"></i>
                                  </div>
                                  <div class="media-body ml-3">
                                    <h6 class="mb-0">Logout</h6>
                                  </div>
                                </div>
                              </a>
                            </div>
                          </div>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>

              <div class="navbar-right menu-right">
                <ul class="d-flex align-items-center list-inline m-0">
                  <li class="nav-item nav-icon">
                    <a href="#" class="search-toggle device-search">
                      <i class="fa fa-search"></i>
                    </a>
                    <div class="search-box iq-search-bar d-search">
                      <form action="#" class="searchbox">
                        <div class="form-group position-relative">
                          <input type="text" class="text search-input font-size-12"
                            placeholder="type here to search..." />
                          <i class="search-link fa fa-search"></i>
                        </div>
                      </form>
                    </div>
                  </li>
                  <li class="nav-item nav-icon">
                    <a href="#" class="iq-user-dropdown search-toggle d-flex align-items-center p-0">
                      <img src="images/user/user.png" class="img-fluid user-m rounded-circle" alt="" />
                    </a>
                    <div class="iq-sub-dropdown iq-user-dropdown">
                      <div class="iq-card shadow-none m-0">
                        <div class="iq-card-body p-0 pl-3 pr-3">
                          <a href="#" class="iq-sub-card setting-dropdown">
                            <div class="media align-items-center">
                              <div class="right-icon">
                                <i class="fa fa-user text-primary"></i>
                              </div>
                              <div class="media-body ml-3">
                                <h6 class="mb-0">Manage Profile</h6>
                              </div>
                            </div>
                          </a>
                          <a href="#" class="iq-sub-card setting-dropdown">
                            <div class="media align-items-center">
                              <div class="right-icon">
                                <i class="fa fa-cog text-primary"></i>
                              </div>
                              <div class="media-body ml-3">
                                <h6 class="mb-0">Settings</h6>
                              </div>
                            </div>
                          </a>
                          <a href="#" class="iq-sub-card setting-dropdown">
                            <div class="media align-items-center">
                              <div class="right-icon">
                                <i class="fa fa-inr text-primary"></i>
                              </div>
                              <div class="media-body ml-3">
                                <h6 class="mb-0">Pricing Plan</h6>
                              </div>
                            </div>
                          </a>
                          <a href="#" class="iq-sub-card setting-dropdown">
                            <div class="media align-items-center">
                              <div class="right-icon">
                                <i class="fa fa-sign-out text-primary"></i>
                              </div>
                              <div class="media-body ml-3">
                                <h6 class="mb-0">Logout</h6>
                              </div>
                            </div>
                          </a>
                        </div>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </nav>
            <div class="nav-overlay"></div>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- slider starts  -->
  <section id="home" class="iq-main-slider p-0">
    

      <div class="slide slick-bg s-bg-2">
        <div class="container-fluid position-relative h-100">
          <div class="slider-inner h-100">
            <div class="row align-items-center h--100">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- slider ends -->

  <!-- main content starts  -->
  <div class="main-content">
    <!-- favorite section starts   -->

    <section id="iq-favorites">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-12 overflow-hidden">
            <div class="iq-main-header d-flex align-items-center justify-content-between">
              <h4 class="main-title">Top Picks For You</h4>
              <a href="#" class="iq-view-all">View All</a>
            </div>
            <div class="favorite-contens">
              <ul class="favorites-slider list-inline row p-0 mb-0">
                <!-- slide item 1 -->
                <li class="slide-item">
                  <div class="block-images position-relative">
                    <div class="img-box">
                      <img src="images/favorite/f1.jpg" class="img-fluid" alt="" />
                    </div>
                    <div class="block-description">
                      <h6 class="iq-title">
                        <a href="#"> Insidious </a>
                      </h6>
                      <div class="movie-time d-flex align-items-center my-2">
                        <div class="badge badge-secondary p-1 mr-2">16+</div>
                        <span class="text-white">1h 43min</span>
                      </div>
                      <div class="hover-buttons">
                        <span class="btn btn-hover iq-button">
                          <i class="fa fa-play mr-1"></i>
                          Watch Trailer
                        </span>
                      </div>
                    </div>
                    <div class="block-social-info">
                      <ul class="list-inline p-0 m-0 music-play-lists">
                        <li class="share">
                          <span><i class="fa fa-share-alt"></i></span>
                          <div class="share-box">
                            <div class="d-flex align-items-center">
                              <a href="#" class="share-ico"><i class="fa fa-share-alt"></i></a>
                              <a href="#" class="share-ico"><i class="fa fa-youtube"></i></a>
                              <a href="#" class="share-ico"><i class="fa fa-instagram"></i></a>
                            </div>
                          </div>
                        </li>
                        <li>
                          <span><i class="fa fa-heart"></i></span>
                          <span class="count-box">19+</span>
                        </li>
                        <li>
                          <span><i class="fa fa-plus"></i></span>
                        </li>
                      </ul>
                    </div>
                  </div>
                </li>
                <!-- slide item 2 -->
                <li class="slide-item">
                  <div class="block-images position-relative">
                    <div class="img-box">
                      <img src="images/favorite/f2.jpg" class="img-fluid" alt="" />
                    </div>
                    <div class="block-description">
                      <h6 class="iq-title">
                        <a href="#"> War </a>
                      </h6>
                      <div class="movie-time d-flex align-items-center my-2">
                        <div class="badge badge-secondary p-1 mr-2">12+</div>
                        <span class="text-white">2h 34min</span>
                      </div>
                      <div class="hover-buttons">
                        <span class="btn btn-hover iq-button">
                          <i class="fa fa-play mr-1"></i>
                          Watch Trailer
                        </span>
                      </div>
                    </div>
                    <div class="block-social-info">
                      <ul class="list-inline p-0 m-0 music-play-lists">
                        <li class="share">
                          <span><i class="fa fa-share-alt"></i></span>
                          <div class="share-box">
                            <div class="d-flex align-items-center">
                              <a href="#" class="share-ico"><i class="fa fa-share-alt"></i></a>
                              <a href="#" class="share-ico"><i class="fa fa-youtube"></i></a>
                              <a href="#" class="share-ico"><i class="fa fa-instagram"></i></a>
                            </div>
                          </div>
                        </li>
                        <li>
                          <span><i class="fa fa-heart"></i></span>
                          <span class="count-box">58+</span>
                        </li>
                        <li>
                          <span><i class="fa fa-plus"></i></span>
                        </li>
                      </ul>
                    </div>
                  </div>
                </li>
                <!-- slide item 3 -->
                <li class="slide-item">
                  <div class="block-images position-relative">
                    <div class="img-box">
                      <img src="images/favorite/f3.jpg" class="img-fluid" alt="" />
                    </div>
                    <div class="block-description">
                      <h6 class="iq-title">
                        <a href="#"> Five Feet Apart </a>
                      </h6>
                      <div class="movie-time d-flex align-items-center my-2">
                        <div class="badge badge-secondary p-1 mr-2">18+</div>
                        <span class="text-white">2h 57min</span>
                      </div>
                      <div class="hover-buttons">
                        <span class="btn btn-hover iq-button">
                          <i class="fa fa-play mr-1"></i>
                          Watch Trailer
                        </span>
                      </div>
                    </div>
                    <div class="block-social-info">
                      <ul class="list-inline p-0 m-0 music-play-lists">
                        <li class="share">
                          <span><i class="fa fa-share-alt"></i></span>
                          <div class="share-box">
                            <div class="d-flex align-items-center">
                              <a href="#" class="share-ico"><i class="fa fa-share-alt"></i></a>
                              <a href="#" class="share-ico"><i class="fa fa-youtube"></i></a>
                              <a href="#" class="share-ico"><i class="fa fa-instagram"></i></a>
                            </div>
                          </div>
                        </li>
                        <li>
                          <span><i class="fa fa-heart"></i></span>
                          <span class="count-box">19+</span>
                        </li>
                        <li>
                          <span><i class="fa fa-plus"></i></span>
                        </li>
                      </ul>
                    </div>
                  </div>
                </li>
                <!-- slide item 4 -->
                <li class="slide-item">
                  <div class="block-images position-relative">
                    <div class="img-box">
                      <img src="images/favorite/f4.jpg" class="img-fluid" alt="" />
                    </div>
                    <div class="block-description">
                      <h6 class="iq-title">
                        <a href="#"> Chhichore </a>
                      </h6>
                      <div class="movie-time d-flex align-items-center my-2">
                        <div class="badge badge-secondary p-1 mr-2">10+</div>
                        <span class="text-white">2h 23min</span>
                      </div>
                      <div class="hover-buttons">
                        <span class="btn btn-hover iq-button">
                          <i class="fa fa-play mr-1"></i>
                          Watch Trailer
                        </span>
                      </div>
                    </div>
                    <div class="block-social-info">
                      <ul class="list-inline p-0 m-0 music-play-lists">
                        <li class="share">
                          <span><i class="fa fa-share-alt"></i></span>
                          <div class="share-box">
                            <div class="d-flex align-items-center">
                              <a href="#" class="share-ico"><i class="fa fa-share-alt"></i></a>
                              <a href="#" class="share-ico"><i class="fa fa-youtube"></i></a>
                              <a href="#" class="share-ico"><i class="fa fa-instagram"></i></a>
                            </div>
                          </div>
                        </li>
                        <li>
                          <span><i class="fa fa-heart"></i></span>
                          <span class="count-box">19+</span>
                        </li>
                        <li>
                          <span><i class="fa fa-plus"></i></span>
                        </li>
                      </ul>
                    </div>
                  </div>
                </li>
                <!-- slide item 5 -->
                <li class="slide-item">
                  <div class="block-images position-relative">
                    <div class="img-box">
                      <img src="images/favorite/f5.jpg" class="img-fluid" alt="" />
                    </div>
                    <div class="block-description">
                      <h6 class="iq-title">
                        <a href="#"> Doctor Strange </a>
                      </h6>
                      <div class="movie-time d-flex align-items-center my-2">
                        <div class="badge badge-secondary p-1 mr-2">12+</div>
                        <span class="text-white">1h 55min</span>
                      </div>
                      <div class="hover-buttons">
                        <span class="btn btn-hover iq-button">
                          <i class="fa fa-play mr-1"></i>
                          Watch Trailer
                        </span>
                      </div>
                    </div>
                    <div class="block-social-info">
                      <ul class="list-inline p-0 m-0 music-play-lists">
                        <li class="share">
                          <span><i class="fa fa-share-alt"></i></span>
                          <div class="share-box">
                            <div class="d-flex align-items-center">
                              <a href="#" class="share-ico"><i class="fa fa-share-alt"></i></a>
                              <a href="#" class="share-ico"><i class="fa fa-youtube"></i></a>
                              <a href="#" class="share-ico"><i class="fa fa-instagram"></i></a>
                            </div>
                          </div>
                        </li>
                        <li>
                          <span><i class="fa fa-heart"></i></span>
                          <span class="count-box">19+</span>
                        </li>
                        <li>
                          <span><i class="fa fa-plus"></i></span>
                        </li>
                      </ul>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- favourite section ends -->

    <!-- upcoming contents section starts  -->
    <section id="iq-upcoming-movie">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-12 overflow-hidden">
            <div class="iq-main-header d-flex align-items-center justify-content-between">
              <h4 class="main-title">Popular Movies</h4>
              <a href="#" class="iq-view-all">View All</a>
            </div>
            <div class="favorite-contens">
              <ul class="favorites-slider list-inline row p-0 mb-0">
                <!-- slide item 1 -->
                <li class="slide-item">
                  <div class="block-images position-relative">
                    <div class="img-box">
                      <img src="images/popular/u1.jpg" class="img-fluid" alt="" />
                    </div>
                    <div class="block-description">
                      <h6 class="iq-title">
                        <a href="#"> Mulan </a>
                      </h6>
                      <div class="movie-time d-flex align-items-center my-2">
                        <div class="badge badge-secondary p-1 mr-2">10+</div>
                        <span class="text-white">2h</span>
                      </div>
                      <div class="hover-buttons">
                        <span class="btn btn-hover iq-button">
                          <i class="fa fa-play mr-1"></i>
                          Watch Trailer
                        </span>
                      </div>
                    </div>
                    <div class="block-social-info">
                      <ul class="list-inline p-0 m-0 music-play-lists">
                        <li class="share">
                          <span><i class="fa fa-share-alt"></i></span>
                          <div class="share-box">
                            <div class="d-flex align-items-center">
                              <a href="#" class="share-ico"><i class="fa fa-share-alt"></i></a>
                              <a href="#" class="share-ico"><i class="fa fa-youtube"></i></a>
                              <a href="#" class="share-ico"><i class="fa fa-instagram"></i></a>
                            </div>
                          </div>
                        </li>
                        <li>
                          <span><i class="fa fa-heart"></i></span>
                          <span class="count-box">89+</span>
                        </li>
                        <li>
                          <span><i class="fa fa-plus"></i></span>
                        </li>
                      </ul>
                    </div>
                  </div>
                </li>
                <!-- slide item 2 -->
                <li class="slide-item">
                  <div class="block-images position-relative">
                    <div class="img-box">
                      <img src="images/popular/u2.jpg" class="img-fluid" alt="" />
                    </div>
                    <div class="block-description">
                      <h6 class="iq-title">
                        <a href="#"> Laxmii </a>
                      </h6>
                      <div class="movie-time d-flex align-items-center my-2">
                        <div class="badge badge-secondary p-1 mr-2">18+</div>
                        <span class="text-white">2h 21min</span>
                      </div>
                      <div class="hover-buttons">
                        <span class="btn btn-hover iq-button">
                          <i class="fa fa-play mr-1"></i>
                          Watch Trailer
                        </span>
                      </div>
                    </div>
                    <div class="block-social-info">
                      <ul class="list-inline p-0 m-0 music-play-lists">
                        <li class="share">
                          <span><i class="fa fa-share-alt"></i></span>
                          <div class="share-box">
                            <div class="d-flex align-items-center">
                              <a href="#" class="share-ico"><i class="fa fa-share-alt"></i></a>
                              <a href="#" class="share-ico"><i class="fa fa-youtube"></i></a>
                              <a href="#" class="share-ico"><i class="fa fa-instagram"></i></a>
                            </div>
                          </div>
                        </li>
                        <li>
                          <span><i class="fa fa-heart"></i></span>
                          <span class="count-box">35+</span>
                        </li>
                        <li>
                          <span><i class="fa fa-plus"></i></span>
                        </li>
                      </ul>
                    </div>
                  </div>
                </li>
                <!-- slide item 3 -->
                <li class="slide-item">
                  <div class="block-images position-relative">
                    <div class="img-box">
                      <img src="images/popular/u3.jpg" class="img-fluid" alt="" />
                    </div>
                    <div class="block-description">
                      <h6 class="iq-title">
                        <a href="#"> Captain America </a>
                      </h6>
                      <div class="movie-time d-flex align-items-center my-2">
                        <div class="badge badge-secondary p-1 mr-2">12+</div>
                        <span class="text-white">2h 4min</span>
                      </div>
                      <div class="hover-buttons">
                        <span class="btn btn-hover iq-button">
                          <i class="fa fa-play mr-1"></i>
                          Watch Trailer
                        </span>
                      </div>
                    </div>
                    <div class="block-social-info">
                      <ul class="list-inline p-0 m-0 music-play-lists">
                        <li class="share">
                          <span><i class="fa fa-share-alt"></i></span>
                          <div class="share-box">
                            <div class="d-flex align-items-center">
                              <a href="#" class="share-ico"><i class="fa fa-share-alt"></i></a>
                              <a href="#" class="share-ico"><i class="fa fa-youtube"></i></a>
                              <a href="#" class="share-ico"><i class="fa fa-instagram"></i></a>
                            </div>
                          </div>
                        </li>
                        <li>
                          <span><i class="fa fa-heart"></i></span>
                          <span class="count-box">99+</span>
                        </li>
                        <li>
                          <span><i class="fa fa-plus"></i></span>
                        </li>
                      </ul>
                    </div>
                  </div>
                </li>
                <!-- slide item 4 -->
                <li class="slide-item">
                  <div class="block-images position-relative">
                    <div class="img-box">
                      <img src="images/popular/u4.jpg" class="img-fluid" alt="" />
                    </div>
                    <div class="block-description">
                      <h6 class="iq-title">
                        <a href="#"> Life of Pie </a>
                      </h6>
                      <div class="movie-time d-flex align-items-center my-2">
                        <div class="badge badge-secondary p-1 mr-2">11+</div>
                        <span class="text-white">2h 7min</span>
                      </div>
                      <div class="hover-buttons">
                        <span class="btn btn-hover iq-button">
                          <i class="fa fa-play mr-1"></i>
                          Watch Trailer
                        </span>
                      </div>
                    </div>
                    <div class="block-social-info">
                      <ul class="list-inline p-0 m-0 music-play-lists">
                        <li class="share">
                          <span><i class="fa fa-share-alt"></i></span>
                          <div class="share-box">
                            <div class="d-flex align-items-center">
                              <a href="#" class="share-ico"><i class="fa fa-share-alt"></i></a>
                              <a href="#" class="share-ico"><i class="fa fa-youtube"></i></a>
                              <a href="#" class="share-ico"><i class="fa fa-instagram"></i></a>
                            </div>
                          </div>
                        </li>
                        <li>
                          <span><i class="fa fa-heart"></i></span>
                          <span class="count-box">19+</span>
                        </li>
                        <li>
                          <span><i class="fa fa-plus"></i></span>
                        </li>
                      </ul>
                    </div>
                  </div>
                </li>
                <!-- slide item 5 -->
                <li class="slide-item">
                  <div class="block-images position-relative">
                    <div class="img-box">
                      <img src="images/popular/u5.jpg" class="img-fluid" alt="" />
                    </div>
                    <div class="block-description">
                      <h6 class="iq-title">
                        <a href="#"> Mission Mangal </a>
                      </h6>
                      <div class="movie-time d-flex align-items-center my-2">
                        <div class="badge badge-secondary p-1 mr-2">12+</div>
                        <span class="text-white">2h 10min</span>
                      </div>
                      <div class="hover-buttons">
                        <span class="btn btn-hover iq-button">
                          <i class="fa fa-play mr-1"></i>
                          Watch Trailer
                        </span>
                      </div>
                    </div>
                    <div class="block-social-info">
                      <ul class="list-inline p-0 m-0 music-play-lists">
                        <li class="share">
                          <span><i class="fa fa-share-alt"></i></span>
                          <div class="share-box">
                            <div class="d-flex align-items-center">
                              <a href="#" class="share-ico"><i class="fa fa-share-alt"></i></a>
                              <a href="#" class="share-ico"><i class="fa fa-youtube"></i></a>
                              <a href="#" class="share-ico"><i class="fa fa-instagram"></i></a>
                            </div>
                          </div>
                        </li>
                        <li>
                          <span><i class="fa fa-heart"></i></span>
                          <span class="count-box">19+</span>
                        </li>
                        <li>
                          <span><i class="fa fa-plus"></i></span>
                        </li>
                      </ul>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- upcoming contents section ends -->

    <section id="iq-suggested" class="s-margin">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-12 overflow-hidden">
            <div class="iq-main-header d-flex align-items-center justify-content-between">
              <h4 class="main-title">Suggested Sports</h4>
              <a href="#" class="iq-view-all">View All</a>
            </div>
            <div class="favorite-contens">
              <ul class="favorites-slider list-inline row p-0 mb-0">
                <!-- slide item 1 -->
                <li class="slide-item">
                  <div class="block-images position-relative">
                    <div class="img-box">
                      <img src="images/suggested/01.jpg" class="img-fluid" alt="" />
                    </div>
                    <div class="block-description">
                      <h6 class="iq-title">
                        <a href="#"> Basketball </a>
                      </h6>
                      <div class="movie-time d-flex align-items-center my-2">
                        <div class="badge badge-secondary p-1 mr-2">NBA</div>
                        <span class="text-white">SPorts</span>
                      </div>
                      <div class="hover-buttons">
                        <span class="btn btn-hover iq-button">
                          <i class="fa fa-play mr-1"></i>
                          Watch Trailer
                        </span>
                      </div>
                    </div>
                    <div class="block-social-info">
                      <ul class="list-inline p-0 m-0 music-play-lists">
                        <li class="share">
                          <span><i class="fa fa-share-alt"></i></span>
                          <div class="share-box">
                            <div class="d-flex align-items-center">
                              <a href="#" class="share-ico"><i class="fa fa-share-alt"></i></a>
                              <a href="#" class="share-ico"><i class="fa fa-youtube"></i></a>
                              <a href="#" class="share-ico"><i class="fa fa-instagram"></i></a>
                            </div>
                          </div>
                        </li>
                        <li>
                          <span><i class="fa fa-heart"></i></span>
                          <span class="count-box">89+</span>
                        </li>
                        <li>
                          <span><i class="fa fa-plus"></i></span>
                        </li>
                      </ul>
                    </div>
                  </div>
                </li>
                <!-- slide item 2 -->
                <li class="slide-item">
                  <div class="block-images position-relative">
                    <div class="img-box">
                      <img src="images/suggested/02.jpg" class="img-fluid" alt="" />
                    </div>
                    <div class="block-description">
                      <h6 class="iq-title">
                        <a href="#"> VolleyBall </a>
                      </h6>
                      <div class="movie-time d-flex align-items-center my-2">
                        <div class="badge badge-secondary p-1 mr-2">PRO</div>
                        <span class="text-white">Sports</span>
                      </div>
                      <div class="hover-buttons">
                        <span class="btn btn-hover iq-button">
                          <i class="fa fa-play mr-1"></i>
                          Watch Trailer
                        </span>
                      </div>
                    </div>
                    <div class="block-social-info">
                      <ul class="list-inline p-0 m-0 music-play-lists">
                        <li class="share">
                          <span><i class="fa fa-share-alt"></i></span>
                          <div class="share-box">
                            <div class="d-flex align-items-center">
                              <a href="#" class="share-ico"><i class="fa fa-share-alt"></i></a>
                              <a href="#" class="share-ico"><i class="fa fa-youtube"></i></a>
                              <a href="#" class="share-ico"><i class="fa fa-instagram"></i></a>
                            </div>
                          </div>
                        </li>
                        <li>
                          <span><i class="fa fa-heart"></i></span>
                          <span class="count-box">35+</span>
                        </li>
                        <li>
                          <span><i class="fa fa-plus"></i></span>
                        </li>
                      </ul>
                    </div>
                  </div>
                </li>
                <!-- slide item 3 -->
                <li class="slide-item">
                  <div class="block-images position-relative">
                    <div class="img-box">
                      <img src="images/suggested/03.jpg" class="img-fluid" alt="" />
                    </div>
                    <div class="block-description">
                      <h6 class="iq-title">
                        <a href="#"> Basketball </a>
                      </h6>
                      <div class="movie-time d-flex align-items-center my-2">
                        <div class="badge badge-secondary p-1 mr-2">LSU</div>
                        <span class="text-white">Sports</span>
                      </div>
                      <div class="hover-buttons">
                        <span class="btn btn-hover iq-button">
                          <i class="fa fa-play mr-1"></i>
                          Watch Trailer
                        </span>
                      </div>
                    </div>
                    <div class="block-social-info">
                      <ul class="list-inline p-0 m-0 music-play-lists">
                        <li class="share">
                          <span><i class="fa fa-share-alt"></i></span>
                          <div class="share-box">
                            <div class="d-flex align-items-center">
                              <a href="#" class="share-ico"><i class="fa fa-share-alt"></i></a>
                              <a href="#" class="share-ico"><i class="fa fa-youtube"></i></a>
                              <a href="#" class="share-ico"><i class="fa fa-instagram"></i></a>
                            </div>
                          </div>
                        </li>
                        <li>
                          <span><i class="fa fa-heart"></i></span>
                          <span class="count-box">99+</span>
                        </li>
                        <li>
                          <span><i class="fa fa-plus"></i></span>
                        </li>
                      </ul>
                    </div>
                  </div>
                </li>
                <!-- slide item 4 -->
                <li class="slide-item">
                  <div class="block-images position-relative">
                    <div class="img-box">
                      <img src="images/suggested/04.jpg" class="img-fluid" alt="" />
                    </div>
                    <div class="block-description">
                      <h6 class="iq-title">
                        <a href="#"> Cricket </a>
                      </h6>
                      <div class="movie-time d-flex align-items-center my-2">
                        <div class="badge badge-secondary p-1 mr-2">T-20</div>
                        <span class="text-white">Sports</span>
                      </div>
                      <div class="hover-buttons">
                        <span class="btn btn-hover iq-button">
                          <i class="fa fa-play mr-1"></i>
                          Watch Trailer
                        </span>
                      </div>
                    </div>
                    <div class="block-social-info">
                      <ul class="list-inline p-0 m-0 music-play-lists">
                        <li class="share">
                          <span><i class="fa fa-share-alt"></i></span>
                          <div class="share-box">
                            <div class="d-flex align-items-center">
                              <a href="#" class="share-ico"><i class="fa fa-share-alt"></i></a>
                              <a href="#" class="share-ico"><i class="fa fa-youtube"></i></a>
                              <a href="#" class="share-ico"><i class="fa fa-instagram"></i></a>
                            </div>
                          </div>
                        </li>
                        <li>
                          <span><i class="fa fa-heart"></i></span>
                          <span class="count-box">19+</span>
                        </li>
                        <li>
                          <span><i class="fa fa-plus"></i></span>
                        </li>
                      </ul>
                    </div>
                  </div>
                </li>
                <!-- slide item 5 -->
                <li class="slide-item">
                  <div class="block-images position-relative">
                    <div class="img-box">
                      <img src="images/suggested/05.jpg" class="img-fluid" alt="" />
                    </div>
                    <div class="block-description">
                      <h6 class="iq-title">
                        <a href="#"> Golf </a>
                      </h6>
                      <div class="movie-time d-flex align-items-center my-2">
                        <div class="badge badge-secondary p-1 mr-2">PGA</div>
                        <span class="text-white">Sports</span>
                      </div>
                      <div class="hover-buttons">
                        <span class="btn btn-hover iq-button">
                          <i class="fa fa-play mr-1"></i>
                          Watch Trailer
                        </span>
                      </div>
                    </div>
                    <div class="block-social-info">
                      <ul class="list-inline p-0 m-0 music-play-lists">
                        <li class="share">
                          <span><i class="fa fa-share-alt"></i></span>
                          <div class="share-box">
                            <div class="d-flex align-items-center">
                              <a href="#" class="share-ico"><i class="fa fa-share-alt"></i></a>
                              <a href="#" class="share-ico"><i class="fa fa-youtube"></i></a>
                              <a href="#" class="share-ico"><i class="fa fa-instagram"></i></a>
                            </div>
                          </div>
                        </li>
                        <li>
                          <span><i class="fa fa-heart"></i></span>
                          <span class="count-box">19+</span>
                        </li>
                        <li>
                          <span><i class="fa fa-plus"></i></span>
                        </li>
                      </ul>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="iq-suggested" class="s-margin">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-12 overflow-hidden">
            <div class="iq-main-header d-flex align-items-center justify-content-between">
              <h4 class="main-title">Recommended For You</h4>
              <a href="#" class="iq-view-all">View All</a>
            </div>
            <div class="favorite-contens">
              <ul class="favorites-slider list-inline row p-0 mb-0">
                <!-- slide item 1 -->
                <li class="slide-item">
                  <div class="block-images position-relative">
                    <div class="img-box">
                      <img src="images/tvthrillers/01.jpg" class="img-fluid" alt="" />
                    </div>
                    <div class="block-description">
                      <h6 class="iq-title">
                        <a href="#">The Martian</a>
                      </h6>
                      <div class="movie-time d-flex align-items-center my-2">
                        <div class="badge badge-secondary p-1 mr-2">15+</div>
                        <span class="text-white">2h 45min</span>
                      </div>
                      <div class="hover-buttons">
                        <span class="btn btn-hover iq-button">
                          <i class="fa fa-play mr-1"></i>
                          Watch Trailer
                        </span>
                      </div>
                    </div>
                    <div class="block-social-info">
                      <ul class="list-inline p-0 m-0 music-play-lists">
                        <li class="share">
                          <span><i class="fa fa-share-alt"></i></span>
                          <div class="share-box">
                            <div class="d-flex align-items-center">
                              <a href="#" class="share-ico"><i class="fa fa-share-alt"></i></a>
                              <a href="#" class="share-ico"><i class="fa fa-youtube"></i></a>
                              <a href="#" class="share-ico"><i class="fa fa-instagram"></i></a>
                            </div>
                          </div>
                        </li>
                        <li>
                          <span><i class="fa fa-heart"></i></span>
                          <span class="count-box">89+</span>
                        </li>
                        <li>
                          <span><i class="fa fa-plus"></i></span>
                        </li>
                      </ul>
                    </div>
                  </div>
                </li>
                <!-- slide item 2 -->
                <li class="slide-item">
                  <div class="block-images position-relative">
                    <div class="img-box">
                      <img src="images/tvthrillers/02.jpg" class="img-fluid" alt="" />
                    </div>
                    <div class="block-description">
                      <h6 class="iq-title">
                        <a href="#">Unhinged</a>
                      </h6>
                      <div class="movie-time d-flex align-items-center my-2">
                        <div class="badge badge-secondary p-1 mr-2">7+</div>
                        <span class="text-white">2h 12min</span>
                      </div>
                      <div class="hover-buttons">
                        <span class="btn btn-hover iq-button">
                          <i class="fa fa-play mr-1"></i>
                          Watch Trailer
                        </span>
                      </div>
                    </div>
                    <div class="block-social-info">
                      <ul class="list-inline p-0 m-0 music-play-lists">
                        <li class="share">
                          <span><i class="fa fa-share-alt"></i></span>
                          <div class="share-box">
                            <div class="d-flex align-items-center">
                              <a href="#" class="share-ico"><i class="fa fa-share-alt"></i></a>
                              <a href="#" class="share-ico"><i class="fa fa-youtube"></i></a>
                              <a href="#" class="share-ico"><i class="fa fa-instagram"></i></a>
                            </div>
                          </div>
                        </li>
                        <li>
                          <span><i class="fa fa-heart"></i></span>
                          <span class="count-box">35+</span>
                        </li>
                        <li>
                          <span><i class="fa fa-plus"></i></span>
                        </li>
                      </ul>
                    </div>
                  </div>
                </li>
                <!-- slide item 3 -->
                <li class="slide-item">
                  <div class="block-images position-relative">
                    <div class="img-box">
                      <img src="images/tvthrillers/03.jpg" class="img-fluid" alt="" />
                    </div>
                    <div class="block-description">
                      <h6 class="iq-title">
                        <a href="#">Kingsman</a>
                      </h6>
                      <div class="movie-time d-flex align-items-center my-2">
                        <div class="badge badge-secondary p-1 mr-2">18+</div>
                        <span class="text-white">3h</span>
                      </div>
                      <div class="hover-buttons">
                        <span class="btn btn-hover iq-button">
                          <i class="fa fa-play mr-1"></i>
                          Watch Trailer
                        </span>
                      </div>
                    </div>
                    <div class="block-social-info">
                      <ul class="list-inline p-0 m-0 music-play-lists">
                        <li class="share">
                          <span><i class="fa fa-share-alt"></i></span>
                          <div class="share-box">
                            <div class="d-flex align-items-center">
                              <a href="#" class="share-ico"><i class="fa fa-share-alt"></i></a>
                              <a href="#" class="share-ico"><i class="fa fa-youtube"></i></a>
                              <a href="#" class="share-ico"><i class="fa fa-instagram"></i></a>
                            </div>
                          </div>
                        </li>
                        <li>
                          <span><i class="fa fa-heart"></i></span>
                          <span class="count-box">99+</span>
                        </li>
                        <li>
                          <span><i class="fa fa-plus"></i></span>
                        </li>
                      </ul>
                    </div>
                  </div>
                </li>
                <!-- slide item 4 -->
                <li class="slide-item">
                  <div class="block-images position-relative">
                    <div class="img-box">
                      <img src="images/tvthrillers/04.jpg" class="img-fluid" alt="" />
                    </div>
                    <div class="block-description">
                      <h6 class="iq-title">
                        <a href="#"> Casino Royale</a>
                      </h6>
                      <div class="movie-time d-flex align-items-center my-2">
                        <div class="badge badge-secondary p-1 mr-2">18+</div>
                        <span class="text-white">1h 55min</span>
                      </div>
                      <div class="hover-buttons">
                        <span class="btn btn-hover iq-button">
                          <i class="fa fa-play mr-1"></i>
                          Watch Trailer
                        </span>
                      </div>
                    </div>
                    <div class="block-social-info">
                      <ul class="list-inline p-0 m-0 music-play-lists">
                        <li class="share">
                          <span><i class="fa fa-share-alt"></i></span>
                          <div class="share-box">
                            <div class="d-flex align-items-center">
                              <a href="#" class="share-ico"><i class="fa fa-share-alt"></i></a>
                              <a href="#" class="share-ico"><i class="fa fa-youtube"></i></a>
                              <a href="#" class="share-ico"><i class="fa fa-instagram"></i></a>
                            </div>
                          </div>
                        </li>
                        <li>
                          <span><i class="fa fa-heart"></i></span>
                          <span class="count-box">19+</span>
                        </li>
                        <li>
                          <span><i class="fa fa-plus"></i></span>
                        </li>
                      </ul>
                    </div>
                  </div>
                </li>
                <!-- slide item 5 -->
                <li class="slide-item">
                  <div class="block-images position-relative">
                    <div class="img-box">
                      <img src="images/tvthrillers/05.jpg" class="img-fluid" alt="" />
                    </div>
                    <div class="block-description">
                      <h6 class="iq-title">
                        <a href="#"> Mision Impossible</a>
                      </h6>
                      <div class="movie-time d-flex align-items-center my-2">
                        <div class="badge badge-secondary p-1 mr-2">17+</div>
                        <span class="text-white">1h 35min</span>
                      </div>
                      <div class="hover-buttons">
                        <span class="btn btn-hover iq-button">
                          <i class="fa fa-play mr-1"></i>
                          Watch Trailer
                        </span>
                      </div>
                    </div>
                    <div class="block-social-info">
                      <ul class="list-inline p-0 m-0 music-play-lists">
                        <li class="share">
                          <span><i class="fa fa-share-alt"></i></span>
                          <div class="share-box">
                            <div class="d-flex align-items-center">
                              <a href="#" class="share-ico"><i class="fa fa-share-alt"></i></a>
                              <a href="#" class="share-ico"><i class="fa fa-youtube"></i></a>
                              <a href="#" class="share-ico"><i class="fa fa-instagram"></i></a>
                            </div>
                          </div>
                        </li>
                        <li>
                          <span><i class="fa fa-heart"></i></span>
                          <span class="count-box">19+</span>
                        </li>
                        <li>
                          <span><i class="fa fa-plus"></i></span>
                        </li>
                      </ul>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>


  </div>

  <!-- main content ends  -->


  <footer class="iq-bg-dark">
    <div class="footer-top">
      <div class="container-fluid">
        <div class="row footer-standard">
          <div class="col-lg-5">
            <div class="widget text-left">
              <div>
                <ul class="menu p-0">
                  <li><a href="#">Terms of Use</a></li>
                  <li><a href="#">Privacy-Policy</a></li>
                  <li><a href="#">FAQ</a></li>
                  <li><a href="#">Watch List</a></li>
                </ul>
              </div>
            </div>
            <div class="widget text-left">
              <div class="textwidget">
                <p><small>This is Lorem, ipsum dolor sit amet consectetur adipisicing elit. Obcaecati, quo tempore. Quasi rem rerum est in nulla atque quibusdam illo. this is footer and simple tsesxij is writen jkd. fsek hello how are you. please like and subscribe. footer ends .</small></p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
            <h6 class="footer-link-title">
              Follow Us:
            </h6>
            <ul class="info-share">
              <li>
                <a href="#">
                  <i>
                  <fa class="fa fa-facebook"></fa>
                </a>
              </li>
              <li>
                <a href="#">
                  <i>
                  <fa class="fa fa-youtube"></fa>
                </a>
              </li>
              <li>
                <a href="#">
                  <i>
                  <fa class="fa fa-instagram"></fa>
                </a>
              </li>
            </ul>
          </div>
          <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
            <div class="widget text-left">
              <div class="textwidget">
                <h6 class="footer-link-title">
                  NetFlix App 
                </h6>
                <div class="d-flex align-items-center">
                  <a href="#"><img src="images/footer/01.jpg" alt=""></a>
                  <br>
                  <a href="#" class="ml-3"><img src="images/footer/02.jpg" alt=""></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <!-- js files  -->
  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/slick.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/select2.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/slick-animation.min.js"></script>

  <script src="main.js"></script>
</body>

</html>