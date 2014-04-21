basis
=======

I realized I had a bunch of domains and I don't want them pointing at my providers ad filled landing pages.

Just a 1 page, with only cdn loaded resources.


### features

Lightweight with only jQuery & Open Sans web font out of the box - although Bootstrap and Font Awesome are commented out, if they are so desired.

Built to be minimalist, single files, with an additional `sites.json` file for multiple sites.

Default htacess removes www and redirects to non-www version of the site.

### multi-site usage

This is designed to allow you to verify && setup Google Analytics tracking on the placeholder, to do so a sites.json file needs to be added in the root of the project. This is the structure of the file:

```
[
  { "hostname": "example.com", "analytics": "UA-87654321-2", "meta": "fm3KIzzmuVHnxf5GapPI3fYCppTpbwKrT0rZ" },
  { "hostname": "test.com", "analytics": "UA-12345678-1", "meta": "kjd0UmMZykbFY5AmQi3Cvm5AX5NOyPi8fljo" }
]
```

### license

MIT