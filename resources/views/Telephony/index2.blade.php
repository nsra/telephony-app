@extends("_Telephony")



@section("content")
<section  class="main">
     <div class="overlay"></div>
     <div class="container">
          <div class="row">

               <div class="col-md-offset-2 col-md-8 col-sm-12">
                    <div class="wow bounceIn section-title">
                         <h2>Subscribe Newsletter</h2>
                         <p class="wow fadeInUp" data-wow-delay="0.5s">Maecenas orci sem, mollis quis risus a, venenatis condimentum felis. Integer ut bibendum ipsum. Etiam a tristique sapien, ut dictum augue.</p>
                    </div>
                    <div class="wow fadeInUp newsletter-form" data-wow-delay="0.8s">
                         <form action="#" method="post">
                              <div class="col-md-8 col-sm-7">
                                   <input name="email" type="email" class="form-control" id="email" placeholder="Your Email here">
                           	  </div>
                              <div class="col-md-4 col-sm-5">
                                   <input name="submit" type="submit" class="form-control" id="submit" value="Send Newsletter">
                              </div>
                         </form>
                    </div>
               </div>

          </div>
     </div>
</section>

@endsection


