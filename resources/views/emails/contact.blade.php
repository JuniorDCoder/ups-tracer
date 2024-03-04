@component('mail::message')
# New Contact Form Submission

**Name:** {{ $formData['name'] }}

**Email:** {{ $formData['email'] }}

**Subject:** {{ $formData['subject'] }}

**Message:**
{{ $formData['message'] }}
@endcomponent
