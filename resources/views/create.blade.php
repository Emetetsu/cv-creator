<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Resume</title>
</head>
<body>
    <h1>Create Resume</h1>
    <form action="{{ route('resume.store') }}" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Name" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="text" name="phone" placeholder="Phone" required>
        <textarea name="summary" placeholder="Summary" required></textarea>
        <input type="text" name="education" placeholder="Education" required>
        <input type="text" name="experience" placeholder="Experience" required>
        <input type="text" name="skills" placeholder="Skills" required>
        <button type="submit">Create Resume</button>
    </form>
</body>
</html>
