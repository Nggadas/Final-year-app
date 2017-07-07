@if($activity->completed != "true")
<div class="content-div ">
    @if($activity->interest == 'go_kart')

        <div class="content-img"><img src="../../images/go_kart.jpg" alt=""></div>

    @else

        <div class="content-img"><img src="../../images/hiking.jpg" alt=""></div>

    @endif

    <div class="content-details">
        <a class="content-title" href="/activities/{{ $activity->id }}">{{ $activity->name }}</a>
        <p>{{ $activity->about }}</p>
        <div class="quick-info">
            <span>Date: </span>{{ $activity->date }} |
            <span>Location: </span> {{ $activity->city }} |
            <span>Members: </span>12
        </div>
    </div>
</div>
@endif