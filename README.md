# PRG11-2-echos

Assignment to see and practice echoing things to an HTML doc.

## What are Echo?

Since PHP files are executed on the server machine, the 'product' of the script is what the user actually sees. This 'product' becomes the HTML file that the server sends back to the client and what the client shows in the browser. The contents of this HTML file are: (1) Anything _not_ included in the PHP block `<?php ... ?>` and (2) anything explicitly written to the output with `echo` or another output function.

See the starter code for what this looks like.

## Your Tasks

1. Review starter code in the `index.php` file to see how variables can be printed in HTML
2. Create a css file and three additional php files. Each php file should contain a proper html document. Link your css in all four files and create hyperlinks in each file to the other three php files (i.e. I can navigate between files using links).
3. Use echo statements to set a unique `id` for each `<body>` element so that your single css file can provide different styles to each one.
4. Write rules into your css file so that each php file has a different background colour using the unique body ids
5. Echo some content from variables at the top of each php file into the html documents they contain.
