@extends('_layouts.main')

@section('body')
<section id="mainstage" class="mainstage container--full-width">
    <div class="mainstage__overlay"></div>
    <div class="container">
        <h1>Cameron Jetton</h1>
        <h2>Web Developer</h2>
    </div>
    <span class="attribution">
        <a href="https://www.freepik.com/free-photo/golden-glitter-powder-dust-bursting-background_16162571.htm#query=particle%20effect&position=12&from_view=keyword&track=ais">Image by starline</a> on Freepik
    </span>
</section>
<section id="about" class="about">
    <div class="container">
        <h2>About</h2>
        <p>Hi, I'm CamJam. I'm a web developer. I like to make things. I like to make things that make things. I like to make things that make things that make things. I like to make things that make things that make things that make things. I like to make things that make things that make things that make things that make things. I like to make things that make things that make things that make things that make things that make things. I like to make things that make things that make things that make things that make things that make things that make things. I like to make things that make things that make things that make things that make things that make things that make things that make things.</p>
    </div>
</section>
<section id="projects" class="projects">
    <div class="container">
        <h2>Projects</h2>
    </div>
    @if ($projects = $page->projects)
        @foreach ($projects as $project)
            <div id="{{ $project->id }}" class="project bg-center bg-cover bg-no-repeat" style="background-image:url('{{ $project->img_src }}');">
                <span class="sr-only">{{ $project->img_alt }}</span>
                <div class="project__box container">
                    <h3 class="project__title">
                        <a href="{{ $project->url }}">{{ $project->title }}</a>
                    </h3>
                    <!-- <img src="{{ $project->img_src }}" alt="{{ $project->img_alt }}"> -->
                    <p class="project_description text-gray-700">{{ $project->description }}</p>
                </div>
            </div>
        @endforeach
    @endif
</section>
<section id="contact" class="contact">
    <div class="container">
        <h2>Contact</h2>
        <p>Let's get in touch!</p>
    </div>
</section>

@endsection
