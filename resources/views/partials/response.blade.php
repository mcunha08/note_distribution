<div class="col-sm-12 response">
        <img src="{{ Storage::disk('local')->url(App\User::find($response->user_id)->profile_picture) }}"/>
        <p>{{$response->body}}</p>
    <p class="footer">
        {{ App\User::find($response->user_id)->name }}, {{$response->created_at->diffForHumans()}}
    </p>
</div>

