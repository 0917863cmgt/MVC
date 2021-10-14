@extends('layout')
@section('content')
    <body id="homepage">
    <div id="homepage-slider">
        <h2>Photo Slider</h2>
    </div>
    <section id="homepage-intro" class="container-fluid">
        <div class="row">
            <div class="col-6 offset-3">
                <h2>Introductie Section</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque laoreet pellentesque pulvinar. Fusce hendrerit elit at pulvinar fringilla. Morbi ex massa, placerat varius massa a, interdum fermentum quam. Nullam lacinia turpis ut blandit condimentum. Integer placerat pellentesque felis eu malesuada. Suspendisse sem lorem, eleifend ac lorem eget, aliquet lobortis lectus. Nullam ac pharetra augue. Phasellus justo odio, gravida eget mollis at, interdum sit amet lectus. Integer eget faucibus ipsum. Donec in ipsum sit amet elit facilisis dignissim. Donec pretium dui nec dui iaculis, in volutpat lectus feugiat. Integer risus mi, suscipit sit amet ipsum quis, vestibulum condimentum eros. Donec vitae sollicitudin velit. Integer sit amet luctus ex. Phasellus venenatis elementum vestibulum.

                    Nulla pellentesque maximus mi sed molestie. Ut lectus leo, ullamcorper quis tristique vitae, luctus sit amet felis. Curabitur in nunc lacus. Curabitur semper sem erat, sit amet dictum tortor gravida quis. Vestibulum dapibus nisi eget quam venenatis, vel eleifend dolor tempor. Curabitur id orci mattis, iaculis massa aliquam, feugiat purus. Vivamus feugiat nibh vitae egestas pellentesque. Integer metus libero, ultrices in turpis nec, finibus sollicitudin orci.

                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus aliquet magna et gravida maximus. Sed pellentesque, nunc sed elementum egestas, urna nibh pretium risus, ac mattis nisl erat in diam. Vestibulum quam tortor, efficitur a lacus vitae, finibus ullamcorper arcu. Pellentesque efficitur eu lectus id feugiat. Morbi egestas mauris ut ultrices tempor. Quisque sit amet ultricies leo. Praesent at lorem sollicitudin, iaculis sapien id, aliquam lectus. Donec nisi ex, facilisis ac est nec, imperdiet facilisis ligula. Aenean sodales purus nec lectus auctor mattis. Morbi sollicitudin varius auctor. Vivamus pretium neque magna, a dignissim magna congue eget. In est dolor, blandit non aliquam eu, facilisis nec justo. Nunc id nulla vel odio elementum eleifend in ut velit.

                    Nunc lobortis tincidunt arcu, in gravida lectus pellentesque ac. Ut eget nulla eu ante ultricies vehicula ac et quam. Donec id ultricies velit. Proin id interdum ipsum. In nec velit at dui auctor rhoncus a ut eros. Nullam ultricies, metus quis dapibus consequat, erat lacus ornare purus, ac maximus lacus velit a lorem. Vivamus magna mauris, iaculis ut hendrerit porttitor, tristique eget urna. Suspendisse vitae lectus magna. Suspendisse quam ligula, efficitur elementum blandit vitae, pharetra sit amet justo. Nunc lobortis venenatis nibh sit amet placerat. Vivamus at dapibus justo. Aliquam at nibh condimentum, laoreet libero in, ullamcorper massa. Etiam ultricies leo at urna egestas, et varius nulla pulvinar. Pellentesque accumsan justo facilisis sodales pharetra. Proin semper, enim id scelerisque venenatis, tellus tellus lobortis purus, ac rutrum ligula justo eget dolor. Sed tempor vehicula pretium.

                    Maecenas feugiat odio in quam tincidunt feugiat. Cras tristique pulvinar varius. Sed pretium dui a dui mattis dictum. Proin sit amet fermentum tortor. Praesent tempus turpis sit amet pulvinar gravida. Ut dictum magna nunc, id posuere elit condimentum quis. Vivamus sodales, nisl egestas ullamcorper vehicula, tellus magna tristique nulla, id feugiat arcu libero vitae leo. Nullam bibendum nibh odio. Morbi et suscipit metus.</p>
            </div>
        </div>
    </section>
    <section id="homepage-articles" class="container-fluid">
        <div class="row">
            <div class="col-10 offset-1">
                <h2>Nieuws</h2>
                <x-article-featured-card :article="$articles[0]"/>
                <div class="row gx-3 justify-content-center">
                    @foreach( $articles->skip(1) as $article)
                        @if($article->highlighted == 1 && $article->category->name != "Event")
                            <x-article-card :article="$article"/>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <section id="homepage-events" class="container-fluid">
        <div class="row">
            <div class="col-10 offset-1">
                <h2>Events</h2>
                <x-article-featured-card :article="$articles[0]"/>
                <div class="row gx-3 justify-content-center">
                    @foreach( $articles->skip(1) as $article)
                        @if($article->highlighted == 1 && $article->category->name == "Event")
                            <x-article-card :article="$article"/>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <section id="homepage-sponsors">
        <h2>Sponsors slider</h2>
    </section>
    </body>
@endsection
