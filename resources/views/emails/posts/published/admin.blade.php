@component('mail::message')
# Hi

{{$user->name}} has created a new Post.

Title: {{$post->title}}

Click button below to see the new post
@component('mail::button', ['url' => ''])
CLick Here
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
