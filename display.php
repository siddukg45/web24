<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Submission</title>
    <link rel="stylesheet" href="design.css">
</head>

<body>
    <header>
        <p>REGISTRATION FORM</p>
    </header>
    <h1>Registration Details</h1>
    <table border="1">
        <tr>
            <th>Field</th>
            <th>Value</th>
        </tr>
        <tr>
            <td>Name</td>
            <td><?php echo htmlspecialchars($_POST['name']); ?></td>
        </tr>
        <tr>
            <td>USN</td>
            <td><?php echo htmlspecialchars($_POST['usn']); ?></td>
        </tr>
        <tr>
            <td>DOB</td>
            <td><?php echo htmlspecialchars($_POST['dob']); ?></td>
        </tr>
        <tr>
            <td>Branch</td>
            <td><?php echo htmlspecialchars($_POST['branch']); ?></td>
        </tr>
        <tr>
            <td>Semester</td>
            <td><?php echo htmlspecialchars($_POST['sem']); ?></td>
        </tr>
        <tr>
            <td>Phone No</td>
            <td><?php echo htmlspecialchars($_POST['phone']); ?></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><?php echo htmlspecialchars($_POST['email']); ?></td>
        </tr>
    </table>
</body>

</html>