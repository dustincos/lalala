@section('title', 'Contact Us')
<x-home>
    <section class="hero">
        <div class="hero-text">
            <h1>Our fresh Cakes</h1>
            <h4>Cake Series</h4>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap
                into electronic</p>

            <div class="hero-in">
                
                <div class="box">
                    <h3>Choco</h3>
                    <h5>499rs</h5>
                    <img src="{{asset('img/heroo.png')}}">
                </div>
          
                    <div class="box">
                        <h3>Choco</h3>
                        <h5>499rs</h5>
                        <img src="{{asset('img/heroo.png')}}">
                </div>
                <div class="box">
                    <h3>Choco</h3>
                    <h5>499rs</h5>
                    <img src="{{asset('img/heroo.png')}}">
                </div>
            </div>
        </div>

        <div class="hero-img">
            <img src="{{URL('img/heroo.png')}}">
        </div>
    </section>
</x-home>