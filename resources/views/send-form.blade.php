<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Send Email</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2>Send an Email</h2>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <form method="POST" action="{{ route('send.email') }}">
        @csrf
        <div class="mb-3">
            <label for="to" class="form-label">To Email</label>
            <input type="email" name="to" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="subject" class="form-label">Subject</label>
            <input type="text" name="subject" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="body" class="form-label">Message</label>
            <textarea name="body" class="form-control" rows="5" required></textarea>
        </div>
        <button class="btn btn-primary" type="submit">Send Email</button>
    </form>
</div>
</body>
</html>
