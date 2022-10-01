@component('mail::message')
# Hi

You post has been published successfully.

Title: {{$post->title}}

Click button below to see the new post
@component('mail::button', ['url' => ''])
CLick Here
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent