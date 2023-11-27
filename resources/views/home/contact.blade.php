@section('title', 'Contact Us')
<x-home>
    <section class="hero">
        <div class="hero-text">
            <h1>Get in Touch for Sweet Moments: Contact Us Today!</h1>
            <form>      
                <input name="name" type="text" class="feedback-input" placeholder="Name" />   
                <input name="email" type="text" class="feedback-input" placeholder="Email" />
                <textarea name="text" class="feedback-input" placeholder="Comment"></textarea>
                <input type="submit" value="SUBMIT"/>
              </form>
        </div>
        <div class="hero-img">
            <img src="{{URL('img/contact.png')}}">
        </div>
    </section>
</x-home>