@extends('client.layouts.base')


@section('content')
<section class="breadcrumb_area">
    <img class="p_absolute bl_left" src="{{asset('client/img/v.svg')}}" alt="">
    <img class="p_absolute bl_right" src="{{asset('client/img/home_one/b_leaf.svg')}}" alt="">
    <img class="p_absolute star" src="{{asset('client/img/home_one/banner_bg.png')}}" alt="">
    <img class="p_absolute wave_shap_one" src="{{asset('client/img/blog-classic/shap_01.png')}}" alt="">
    <img class="p_absolute wave_shap_two" src="{{asset('client/img/blog-classic/shap_02.png')}}" alt="">
    <img class="p_absolute one wow fadeInRight" src="{{asset('client/img/home_one/b_man_two.png')}}" alt="">
    <img class="p_absolute two wow fadeInUp" data-wow-delay="0.2s" src="{{asset('client/img/home_one/flower.png')}}" alt="">
    <div class="container custom_container">
        <form action="#" class="banner_search_form banner_search_form_two">
            <div class="input-group">
                <input type="search" class="form-control" placeholder='Search ("/" to focus)'>
                <div class="input-group-append">
                    <select class="custom-select" id="inlineFormCustomSelect">
                        <option selected>All Category</option>
                        <option value="1">Doc Archive</option>
                        <option value="2">Doc List</option>
                        <option value="3">KbDoc</option>
                    </select>
                </div>
                <button type="submit"><i class="icon_search"></i></button>
            </div>
        </form>
    </div>
</section>

<section class="page_breadcrumb">
    <div class="container">
        <div class="row">
            <div class="col-sm-7">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Blog</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Blog with sidebar</li>
                    </ol>
                </nav>
            </div>
            <div class="col-sm-5">
                <a href="#" class="date"><i class="icon_clock_alt"></i>Updated on March 03, 2020</a>
            </div>
        </div>
    </div>
</section>
<section class="doc_blog_grid_area sec_pad forum-page-content">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="answer-action">
                    <div class="action-content">
                        <div class="image-wrap">
                            <img src="{{asset('client/img/home_support/answer.png')}}" alt="answer action">
                        </div>

                        <div class="content">
                            <h2 class="ans-title">Can’t find an answer?</h2>
                            <p>
                                Make use of a qualified tutor to get the answer
                            </p>
                        </div>
                    </div>
                    <!-- /.action-content -->

                    <div class="action-button-container">
                        <a href="#" class="action_btn btn-ans">Ask a Question</a>
                    </div>
                    <!-- /.action-button-container -->
                </div>
                <!-- /.answer-action -->

                <div class="post-header forums-header">
                    <div class="col-md-6 col-sm-6 support-info">
                        <span> Forum </span>
                    </div>
                    <!-- /.support-info -->
                    <div class="col-md-6 col-sm-6 support-category-menus">
                        <ul class="forum-titles">
                            <li class="forum-topic-count">Topics</li>
                            <li class="forum-reply-count">Posts</li>
                            <li class="forum-freshness">Last Post</li>
                        </ul>
                    </div>
                    <!-- /.support-category-menus -->
                </div>
                <!-- /.post-header -->

                <div class="community-posts-wrapper bb-radius">

                    <!-- Forum Item -->
                    <div class="community-post style-two forum-item bug">
                        <div class="col-md-6 post-content">
                            <div class="author-avatar forum-icon">
                                <img src="{{asset('client/img/home_support/rc1.png')}}" alt="community post">
                            </div>
                            <div class="entry-content">
                                <h3 class="post-title">
                                    <a href="forum-topics.html">Announcements</a>
                                </h3>
                                <p>This forum is a special forum for general announcements.</p>
                            </div>
                        </div>
                        <div class="col-md-6 post-meta-wrapper">
                            <ul class="forum-titles">
                                <li class="forum-topic-count">10</li>
                                <li class="forum-reply-count">105</li>
                                <li class="forum-freshness">
                                    <div class="freshness-box">
                                        <div class="freshness-top">
                                            <div class="freshness-link">
                                                <a href="#" title="Reply To: Main Forum Rules &amp; Policies">2 years, 2 months ago</a>
                                            </div>
                                        </div>
                                        <div class="freshness-btm">
                                            <a href="#" title="View Eh Jewel's profile" class="bbp-author-link">
                                                <div class="freshness-name">
                                                    <a href="#" title="View Eh Jewel's profile" class="bbp-author-link">
                                                        <span class="bbp-author-name">Eh Jewel</span>
                                                    </a>
                                                </div>
                                                <span class="bbp-author-avatar">
                                                    <img alt="Eh Jewel" src="{{asset('client/img/home_support/cp5.jpg')}}" class="avatar photo">
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- /.forum-item  -->

                    <!-- Forum Item -->
                    <div class="community-post style-two forum-item bug">
                        <div class="col-md-6 post-content">
                            <div class="author-avatar forum-icon">
                                <img src="{{asset('client/img/home_support/rc2.png')}}" alt="community post">
                            </div>
                            <div class="entry-content">
                                <h3 class="post-title">
                                    <a href="forum-topics.html">Technology</a>
                                </h3>
                                <p>Latest technology news and updates from our community.</p>
                            </div>
                        </div>
                        <div class="col-md-6 post-meta-wrapper">
                            <ul class="forum-titles">
                                <li class="forum-topic-count">20</li>
                                <li class="forum-reply-count">305</li>
                                <li class="forum-freshness">
                                    <div class="freshness-box">
                                        <div class="freshness-top">
                                            <div class="freshness-link">
                                                <a href="#" title="Reply To: Main Forum Rules &amp; Policies">2 years, 2 months ago</a>
                                            </div>
                                        </div>
                                        <div class="freshness-btm">
                                            <a href="#" title="View Eh Jewel's profile" class="bbp-author-link">
                                                <div class="freshness-name">
                                                    <a href="#" title="View Eh Jewel's profile" class="bbp-author-link">
                                                        <span class="bbp-author-name">Eh Jewel</span>
                                                    </a>
                                                </div>
                                                <span class="bbp-author-avatar">
                                                    <img alt="Eh Jewel" src="{{asset('client/img/home_support/cp6.jpg')}}" class="avatar photo">
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- /.forum-item  -->

                    <!-- Forum Item -->
                    <div class="community-post style-two forum-item bug">
                        <div class="col-md-6 post-content">
                            <div class="author-avatar forum-icon">
                                <img src="{{asset('client/img/home_support/rc8.png')}}" alt="community post">
                            </div>
                            <div class="entry-content">
                                <h3 class="post-title">
                                    <a href="forum-topics.html">TV & Movies</a>
                                </h3>
                                <p>Use this forum to share your opinion about films and TV Shows. </p>
                            </div>
                        </div>
                        <div class="col-md-6 post-meta-wrapper">
                            <ul class="forum-titles">
                                <li class="forum-topic-count">30</li>
                                <li class="forum-reply-count">156</li>
                                <li class="forum-freshness">
                                    <div class="freshness-box">
                                        <div class="freshness-top">
                                            <div class="freshness-link">
                                                <a href="#" title="Reply To: Main Forum Rules &amp; Policies">2 years, 2 months ago</a>
                                            </div>
                                        </div>
                                        <div class="freshness-btm">
                                            <a href="#" title="View Eh Jewel's profile" class="bbp-author-link">
                                                <div class="freshness-name">
                                                    <a href="#" title="View Eh Jewel's profile" class="bbp-author-link">
                                                        <span class="bbp-author-name">Kyle Jonson</span>
                                                    </a>
                                                </div>
                                                <span class="bbp-author-avatar">
                                                    <img alt="Eh Jewel" src="{{asset('client/img/home_support/cp7.png')}}" class="avatar photo">
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- /.forum-item  -->

                    <!-- Forum Item -->
                    <div class="community-post style-two forum-item bug">
                        <div class="col-md-6 post-content">
                            <div class="author-avatar forum-icon">
                                <img src="{{asset('client/img/home_support/rc3.png')}}" alt="community post">
                            </div>
                            <div class="entry-content">
                                <h3 class="post-title">
                                    <a href="forum-topics.html">KbDoc Support</a>
                                </h3>
                                <p>Get support for KbDoc knowledge-base and documentation template.</p>
                            </div>
                        </div>
                        <div class="col-md-6 post-meta-wrapper">
                            <ul class="forum-titles">
                                <li class="forum-topic-count">99</li>
                                <li class="forum-reply-count">405</li>
                                <li class="forum-freshness">
                                    <div class="freshness-box">
                                        <div class="freshness-top">
                                            <div class="freshness-link">
                                                <a href="#" title="Reply To: Main Forum Rules &amp; Policies">1 years, 2 months ago</a>
                                            </div>
                                        </div>
                                        <div class="freshness-btm">
                                            <a href="#" title="View Eh Jewel's profile" class="bbp-author-link">
                                                <div class="freshness-name">
                                                    <a href="#" title="View Eh Jewel's profile" class="bbp-author-link">
                                                        <span class="bbp-author-name">Giles Posture</span>
                                                    </a>
                                                </div>
                                                <span class="bbp-author-avatar">
                                                    <img alt="Eh Jewel" src="{{asset('client/img/home_support/cp10.png')}}" class="avatar photo">
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- /.forum-item  -->

                    <!-- Forum Item -->
                    <div class="community-post style-two forum-item bug">
                        <div class="col-md-6 post-content">
                            <div class="author-avatar forum-icon">
                                <img src="{{asset('client/img/home_support/rc13.png')}}" alt="community post">
                            </div>
                            <div class="entry-content">
                                <h3 class="post-title">
                                    <a href="forum-topics.html">Marketplaces</a>
                                </h3>
                                <p>This forum is a special forum for marketplace support.</p>
                            </div>
                        </div>
                        <div class="col-md-6 post-meta-wrapper">
                            <ul class="forum-titles">
                                <li class="forum-topic-count">50</li>
                                <li class="forum-reply-count">215</li>
                                <li class="forum-freshness">
                                    <div class="freshness-box">
                                        <div class="freshness-top">
                                            <div class="freshness-link">
                                                <a href="#" title="Reply To: Main Forum Rules &amp; Policies">1 years, 3 months ago</a>
                                            </div>
                                        </div>
                                        <div class="freshness-btm">
                                            <a href="#" title="View Eh Jewel's profile" class="bbp-author-link">
                                                <div class="freshness-name">
                                                    <a href="#" title="View Eh Jewel's profile" class="bbp-author-link">
                                                        <span class="bbp-author-name">Eh Jewel</span>
                                                    </a>
                                                </div>
                                                <span class="bbp-author-avatar">
                                                    <img alt="Eh Jewel" src="{{asset('client/img/home_support/cp5.jpg')}}" class="avatar photo">
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- /.forum-item  -->

                </div>
                <!-- /.community-posts-wrapper -->

            </div>
            <!-- /.col-lg-8 -->

            <div class="col-lg-4">
                <div class="forum_sidebar">
                    <div class="widget status_widget">
                        <h4 class="c_head">Information</h4>
                        <p class="status">Support is <span class="offline">Offline</span></p>

                        <div class="open-hours">
                            <h4 class="title-sm">Our office hours</h4>
                            <p>Monday - Friday / 10am - 6pm (UTC +4) NewYork</p>
                            <ul class="current-time list-unstyled">
                                <li>
                                    <h4 class="title-sm">Your time</h4>
                                    <p>10:30:15 PM</p>
                                </li>
                                <li>
                                    <h4 class="title-sm">Your time</h4>
                                    <p>10:30:15 PM</p>
                                </li>
                            </ul>
                        </div>
                        <!-- /.open-hours -->

                    </div>

                    <div class="widget ticket_widget">
                        <h4 class="c_head">Ticket Categories</h4>

                        <ul class="list-unstyled ticket_categories">
                            <li><img src="{{asset('client/img/home_support/cmm5.png')}}" alt="category"><a href="#">Docs WordPress
                                    Theme</a> <span class="count">10</span></li>
                            <li><img src="{{asset('client/img/home_support/cmm4.png')}}" alt="category"><a href="#">Product Landing
                                    Page</a><span class="count count-fill">13</span><span
                                    class="count">54</span></li>
                            <li><img src="{{asset('client/img/home_support/cmm2.png')}}" alt="category"><a href="#">Knowledge base
                                    Template</a><span class="count">142</span></li>
                            <li><img src="{{asset('client/img/home_support/cmm8.png')}}" alt="category"><a href="#">Startup and App
                                    WP Theme</a> <span class="count">13</span></li>
                            <li><img src="{{asset('client/img/home_support/cmm9.png')}}" alt="category"><a href="#">Clean Email
                                    Template</a> <span class="count">123</span></li>
                            <li><img src="{{asset('client/img/home_support/cmm10.png')}}" alt="category"><a href="#">Apps WordPress
                                    Theme</a> <span class="count">18</span></li>
                        </ul>
                    </div>

                    <div class="widget tag_widget">
                        <h4 class="c_head">Tags</h4>
                        <ul class="list-unstyled w_tag_list style-light">
                            <li><a href="#">Swagger</a></li>
                            <li><a href="#">KbDoc</a></li>
                            <li><a href="#">weCare</a></li>
                            <li><a href="#">Business</a></li>
                            <li><a href="#">Download</a></li>
                            <li><a href="#">Doc</a></li>
                            <li><a href="#">Product board</a></li>
                            <li><a href="#">WordPress</a></li>
                            <li><a href="#">Design</a></li>
                            <li><a href="#">ui/ux</a></li>
                            <li><a href="#">Doc Design</a></li>
                            <li><a href="#">DocAll</a></li>
                        </ul>
                    </div>

                </div>
            </div>
            <!-- /.col-lg-4 -->
        </div>
    </div>
</section>

<div class="call-to-action">
    <div class="overlay-bg"></div>    
    <div class="container">
        <div class="action-content-wrapper">
            <div class="action-title-wrap title-img">
                <img src="{{asset('client/img/home_support/chat-smile.png')}}" alt="">
                <h2 class="action-title">New to Communities?</h2>
            </div>
            <a href="#" class="action_btn">Join the community <i class="arrow_right"></i></a>
        </div>
        <!-- /.action-content-wrapper -->
    </div>
    <!-- /.container -->
</div>
@endsection