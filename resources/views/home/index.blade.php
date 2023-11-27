@section('title', 'Homepage')
<x-home>
     <!-- hero section -->
     <section class="hero">
        <div class="hero-text">
            <h1>Decadent Delights</h1>
            <h4>A Journey Through the World of Heavenly Cakes</h4>
            <p>Experience Pure Bliss in Every Bite: Indulge Your Senses with Our Exquisite Cakes. Unforgettable Moments, One Slice at a Time.</p>

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

        <div class="down-arrow">
            <i class='bx bx-down-arrow-alt'></i>
        </div>
</x-home>

    