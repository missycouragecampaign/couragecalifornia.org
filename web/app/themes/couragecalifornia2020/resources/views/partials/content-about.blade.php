<section id="top" style="background-image: url({{ $data['top_illustration']['url'] }});">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h1>{!! App::title() !!}</h1>
                @php the_content() @endphp
            </div>
        </div>
    </div>
</section>

<section id="staff">
    <div class="container">
        <h2 class="text-center">Staff</h2>
        <div class="row">
            @if($staff)
            @foreach ($staff as $person)
            <div class="col-md-3 person">
                {{-- <div class="portrait">
                    <img src="{{ get_the_post_thumbnail_url($person->ID) }}" />
                </div> --}}
                <a class="name" href="{{ get_permalink($person) }}">
                    <h4>{{ get_the_title($person->ID) }}</h4>
                    <div class="plus">+</div>
                </a>
                <h5>{{ $person->title }}</h5>
            </div>
            @endforeach
            @endif
        </div>
    </div>
</section>

{{-- Boards of Directors --}}
@php $boards = $data['boards_of_director'] @endphp
<section id="directors">
    <div class="container">
        <h2>Boards of Directors</h2>
        @foreach ($boards as $board)
        <div class="board">
            <h3>{{ $board['title'] }}</h3>
            <div class="directors">{!! $board['directors'] !!}</div>
        </div>
        @endforeach
    </div>
</section>

{{-- Legal Information --}}
<section id="legal">
    <div class="container">
        {!! $data['legal_information'] !!}
    </div>
</section>

{{-- @if($jobs)
@php $jobsText = $data['jobs'] ?: array('title' => '', 'text' => '') @endphp
<section id="jobs" style="background-image: url({{ $data['bottom_illustration']['url'] }});">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h2>{{ $jobsText['title'] }}</h2>
                <p>{{ $jobsText['text'] }}</p>
            </div>
            <div class="col-md-8">
                @foreach ($jobs as $job)
                    @include('partials.job-block')
                @endforeach
            </div>
        </div>
    </div>
</section>
@endif --}}