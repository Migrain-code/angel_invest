<div class="row">
    @foreach($teams as $team)
        <div class="col-lg-3">
            <div class="team-box">
                <div class="image">
                    <img src="{{image($team->image)}}" alt="">
                </div>
                <div class="heading">
                    <h4><a href="#">{{$team->name}}</a></h4>
                    <p>{{$team->getMission()}}</p>
                </div>

                <ul class="icons">
                    @if(isset($team->socials))

                        @if(isset($team->socials['facebook']))
                            <li><a href="{{$team->socials['facebook']}}"><i class="fa-brands fa-facebook-f"></i></a></li>
                        @endif
                        @if(isset($team->socials['instagram']))
                            <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>

                        @endif


                        <li><a href="#" class="active"><i class="fa-solid fa-plus"></i></a></li>

                        @if(isset($team->socials['twitter']))
                            <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>

                        @endif

                        @if(isset($team->socials['linkedin']))
                            <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>

                        @endif

                    @endif

                </ul>
                <img class="box-shape" src="/frontend/assets/img/shapes/about-team-box-shape.png" alt="">
            </div>
        </div>

    @endforeach
</div>
