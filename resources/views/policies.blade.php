@extends('layouts.dashboard')

@section('title', 'Policies')

@section('content')

<section class="breadcrumb-area d-flex align-items-center" style=background-image:url(assets/img/bg/bdrc-bg.jpg)>
    <div class=container>
        <div class="row align-items-center">
            <div class="col-xl-12 col-lg-12">
                <div class="breadcrumb-wrap text-center">
                    <div class=breadcrumb-title>
                        <h2>Policies</h2>
                        <div class=breadcrumb-wrap>
                            <nav aria-label=breadcrumb>
                                <ol class=breadcrumb>
                                    <li class=breadcrumb-item><a href="{{url ('/')}}">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current=page>Policies</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="about-area about-p pt-20 pb-20 p-relative fix">
    <div class=animations-02><img src=assets/img/bg/an-img-02.png alt=contact-bg-an-02></div>
    <div class=container>
        <div class="row justify-content-center align-items-center">
            
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="about-content s-about-content wow fadeInRight animated pl-30"
                    data-animation=fadeInRight data-delay=.4s>
                    <div class="about-title second-title pb-25">
                        <h2>Policy</h2>
                    </div>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                    
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                    
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                    
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                    <!-- <div class="about-content3 mt-30">
                        <div class="row justify-content-center align-items-center">
                            <div class=col-md-12>
                                <ul class="green mb-30">
                                    <li> 24 Month / 24,000km Nationwide Warranty monotone</li>
                                    <li> Curabitur dapibus nisl a urna congue, in pharetra urna accumsan.</li>
                                    <li> Customer Rewards Program and excellent technology</li>
                                </ul>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</section>

@endsection