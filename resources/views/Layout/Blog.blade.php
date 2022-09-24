@extends('layout.Master')
@section('title, Blog')

@section('content')
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/css/blog.css') }}">
    <div class="breadcrumb-section breadcrumb-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <div class="breadcrumb-text">
                        <p>Tell Us About Your Experience </p>
                        <h1>Blog</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- start new sec --}}



    <main id="main" class="site-main">
        <section class="site-section subpage-site-section section-blog">
            <div class="container">
                <div class="col-lg-9">

                    <div class="row">
                        <div class="col-md-10">
                            <div class="panel panel-default">
                                <div class="panel-heading">Post Your Experience</div>

                                <div class="panel-body">
                                    @if (session('status'))
                                        <div class="alert alert-success">
                                            {{ session('status') }}
                                        </div>
                                    @endif
                                    <form id="comment-form" method="get" action="{{ route('BlogComments.store') }}">
                                        {{ csrf_field() }}
                                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                        <div class="row" style="padding: 10px;">
                                            <div class="form-group">
                                                <input class="form-control" name="comment"
                                                    placeholder="Post Your Experience">
                                                <div class="form-group">
                                                    <input type="submit" class="btn btn-primary btn-lg" style="width: 100%"
                                                        name="submit" value="Post">

                                                </div>
                                            </div>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>

                        <div class="col-md-10">
                            <div class="panel panel-default">
                                <div class="panel-heading">Old Experiences</div>

                                <div class="panel-body comment-container">
                                    <div class="col-lg-12">
                                        <div class="row" id="grid">
                                            @foreach ($comments as $comment)
                                                <div class="well col-lg-12 col-md-4">
                                                    {{-- data-groups='["{{ $comment->special_type }}"]'> --}}
                                                    <i><b> {{ $comment->name }} </b></i>&nbsp;&nbsp;
                                                    <span> {{ $comment->comment }} </span>
                                                    <div style="margin-left:10px;">
                                                        <a style="cursor: pointer;" cid="{{ $comment->id }}"
                                                            name_a="{{ Auth::user()->name }} " token="{{ csrf_token() }}"
                                                            class="reply">Reply</a>&nbsp;
                          

                                                        @foreach ($replies as $rep)
                                                            @if ($comment->id === $rep->comment_id)
                                                                <div class="well">
                                                                    <i><b> {{ $rep->name }}</b></i>&nbsp;&nbsp;
                                                                    <span> {{ $rep->reply }} </span>
                                                                    <div style="margin-left:10px;">
                                                                        <a rname="{{ Auth::user()->name }}"
                                                                            rid="{{ $comment->id }}"
                                                                            style="cursor: pointer;" class="reply-to-reply"
                                                                            token="{{ csrf_token() }}">Reply</a>&nbsp;
                                                                    </div>
                                                                    

                                                                </div>
                                                            @endif
                                                        @endforeach

                                                    </div>
                                                </div>
                                            @endforeach

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>


            </div>
            </div>
            </div>
        </section><!-- /.section-portfolio -->

    </main>

    <div class="container">
        <button type="submit" class="btn btn-normal pull-right">Submit</button>

        <fieldset>
            <form>
                <div class="row mb-5">
                    <div class="col-sm-3 col-lg-2 hidden-xs">
                        <img class="img-responsive"
                            src="https://static.vecteezy.com/system/resources/previews/002/318/271/original/user-profile-icon-free-vector.jpg"
                            alt="">
                    </div>
                    <div class="form-group col-xs-12 col-sm-9 col-lg-10">
                        <textarea placeholder="Your message" class="form-control " required></textarea>
                    </div>
                </div>
            </form>
        </fieldset>

        <hr>
        <div class="row">
            <div class="col-md-12">
                <div id="content" class="content">
                    <!-- begin profile-content -->
                    <div class="profile-content">
                        <!-- begin tab-content -->
                        <div class="tab-content p-0">
                            <!-- begin #profile-post tab -->
                            <div class="tab-pane fade active show" id="profile-post">
                                @foreach ($comments as $comment)
                                    <!-- begin timeline -->
                                    <ul class="timeline">
                                        <li>
                                            <!-- begin timeline-time -->
                                            <div class="timeline-time">
                                                <span class="time">{{ $comment->created_at->format('m/Y') }} </span>
                                                <span class="date">{{ $comment->created_at->format('h:m:s') }}</span>
                                            </div>
                                            <!-- end timeline-time -->
                                            <!-- begin timeline-icon -->
                                            <div class="timeline-icon">
                                                <a href="javascript:;">&nbsp;</a>
                                            </div>
                                            <!-- end timeline-icon -->
                                            <!-- begin timeline-body -->
                                            <div class="timeline-body">
                                                <div class="timeline-header">

                                                    <span class="username"><a href="javascript:;">{{ $comment->name }} </a>
                                                        <small></small></span>
                                                    <span class="pull-right text-muted">Post</span>
                                                </div>
                                                <div class="timeline-content">
                                                    <p>
                                                        {{ $comment->comment }}
                                                    </p>
                                                </div>

                                                <div class="timeline-comment-box">
                                                    <div class="user"><img
                                                            src="https://static.vecteezy.com/system/resources/previews/002/318/271/original/user-profile-icon-free-vector.jpg">
                                                    </div>
                                                    <div class="input">
                                                        <form action="">
                                                            <div class="input-group">
                                                                <input type="text" class="form-control rounded-corner"
                                                                    placeholder="Write a comment...">
                                                                <span class="input-group-btn p-l-10">
                                                                    <button
                                                                        style="background: #F28123; border:1px solid #F28123"class="btn btn-primary f-s-12 rounded-corner"
                                                                        type="button">Comment</button>
                                                                </span>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end timeline-body -->
                                        </li>

                                    </ul>
                                @endforeach
                                <!-- end timeline -->
                            </div>
                            <!-- end #profile-post tab -->
                        </div>
                        <!-- end tab-content -->
                    </div>
                    <!-- end profile-content -->
                </div>
            </div>
        </div>
    </div>

@endsection
