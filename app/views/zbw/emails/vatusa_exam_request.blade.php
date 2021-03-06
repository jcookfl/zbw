<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="utf-8">
</head>
<body>
<h2>VATUSA Exam Request</h2>
<div>
  <p>A student has requested a VATUSA exam on the ZBW website.</p>
  <ul>
    <li>Student: {{ $student->initials }}</li>
    <li>CID: {{ $student->cid }}</li>
    <li>Current Cert: {{ Zbw\Core\Helpers::readableCert($student->cert) }}</li>
    <li>Current Rating: {{ $student->rating->long }}</li>
    <li>VATUSA Exam Requested: {{ $rating->long }} ({{$rating->short}})</li>
  </ul>
</div>

<p>Best Regards,</p>
<p>Boston John, vZBW Bot</p>
</body>
</html>
