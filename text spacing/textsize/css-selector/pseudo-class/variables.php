<!DOCTYPE html>
<html>
<head>
    <title>Add Element Dynamically</title>
</head>
<body>

<h2>Dynamic Element Example</h2>

<button onclick="addElement()">Add New Paragraph</button>

<div id="container"></div>

<script>
function addElement() {
    // Create a new paragraph element
    let newPara = document.createElement("p");

    // Add text to the paragraph
    newPara.textContent = "This is a new paragraph added dynamically!";

    // Add the new paragraph to the page
    document.getElementById("container").appendChild(newPara);
}
</script>

</body>
</html>
