<div class="w3-container">
    <!-- Course boxes with icon & name -->
    <div class="row category-box-row">
        @forelse($courses as $course)
            <div class="col-md-4  w3-display-container w3-margin-top">
                <a href="{{ route('course.homePage',[ 'id'=>$course->id, 'title' => $course->title]) }}" class="category-box-item">
                    <i class="fa {{ $course->course_icon }} fa-5x"></i>
                    <h2>{{ $course->title }}</h2>
                </a>
                <div class="w3-display-topleft w3-display-hover w3-margin-left">
                    <b>By: <em>Dr/ {{ $course->username }}</em></b>
                </div>
                @if(Auth::User()->role === 'instructor')
                    <div class="w3-display-bottommiddle w3-display-hover">
                        <b><i class="fa  {{ $course->is_active === 1? 'fa-check-circle w3-text-ownGreen':'fa-times-circle w3-text-red w3-opacity-min' }}"></i> {{ $course->is_active === 1? 'Activated Course':'Deactivated Course' }}</b>
                    </div>
                @endif
            </div>
        @empty
            <div class="w3-panel w3-padding w3-margin-left  w3-leftbar w3-border-red w3-pale-red">
                <h4><i class="fa fa-info-circle"></i> You have no courses</h4>
            </div>
        @endforelse
    </div>
</div>

