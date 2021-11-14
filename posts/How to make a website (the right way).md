# So what is a website?

A website is a site, on the web. Yeah, that probably made no sense, so let me explain.

Websites are basically computers somewhere in the world (called [Web Servers](https://developer.mozilla.org/en-US/docs/Glossary/Web_server))serving you content when you request it, but how exactly do you request it?

When you visit a site in your web browser, your computer sends a request using a protocol called [HTTP](https://developer.mozilla.org/en-US/docs/Glossary/HTTP) to the web server, a typical HTTP request will look a little bit like this: `GET / HTTP/1.1` let's dissect this request to understand how it works.

# HTTP requests:

So, what exactly was in that request? There was the "method", did you notice how at the beginning of the request there was the word GET? Yeah, that was the method, the GET method *gets* stuff from the web server, such as a page, an image, and much more! A GET request will include a path, in this case it had been "/" (meaning the root of the website), and then there was the version of HTTP being used, which 1.1 is the standard for at the moment. You can read more about GET requests [here](https://developer.mozilla.org/en-US/docs/Web/HTTP/Methods/OPTIONS).

There are many more HTTP request methods that I won't be going into detail about now, but here are some examples: [POST](https://developer.mozilla.org/en-US/docs/Web/HTTP/Methods/POST), [OPTIONS](https://developer.mozilla.org/en-US/docs/Web/HTTP/Methods/OPTIONS), and [DELETE](https://developer.mozilla.org/en-US/docs/Web/HTTP/Methods/DELETE)