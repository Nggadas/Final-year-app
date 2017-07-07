@if($activity->completed != "true")
<div class="content-div ">
    <div class="content-img"><img src="../../images/hiking.jpg" alt=""></div>

    <div class="content-details">
        <a class="content-title" href="#">{{ $activity->name }}</a>
        <p>{{ $activity->about }}</p>
        <div class="quick-info">
            <span>Date: </span>{{ $activity->date }} |
            <span>Location: </span> {{ $activity->city }} |
            <span>Members: </span>12
        </div>
    </div>
</div>
@endif