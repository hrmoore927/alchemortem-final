
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Alchemortem Assets</title>
</head>
<body>
    <h1>Alchemortem Assets</h1>
    <ul>
        <li><a href="{{ URL::to('assets/database-final.sql') }}">Final Database Export</a></li>
        <li><a href="{{ URL::to('assets/media-sources.pdf') }}">Media Sources Document</a></li>
        <li><a href="{{ URL::to('assets/style-guide.pdf') }}">Style Guide</a></li>
        <li><a href="{{ URL::to('assets/erd.pdf') }}">Entity Relationship Diagram</a></li>
        <li><a href="{{ route('images') }}">Original Images</a></li>
    </ul>
</body>
</html>