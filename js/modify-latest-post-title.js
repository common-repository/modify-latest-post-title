document.addEventListener("DOMContentLoaded", function() {
    // Select all the links with the specific class
    var links = document.querySelectorAll(".wp-block-latest-posts__post-title");
    
    // Iterate over the links
    links.forEach(function(link) {
        // Create a new h3 element
        var h3 = document.createElement("h3");

        // Clone the link and append it to the new h3 element
        h3.appendChild(link.cloneNode(true));

        // Replace the original link with the new h3 element
        link.parentNode.replaceChild(h3, link);
    });
});
