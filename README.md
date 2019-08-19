# zandalartribe.eu

This repository contains the Wordpress theme for the ZandalarTribe.eu website, a World of Warcraft community website.

## Release process

To make a new version of the theme available for automatic update via Wordpress, commit your changes, then create a new Git tag and push it to the remote repository:

```bash
git add .
git commit -m "Version 1.3"
git tag v1.3
git push --follow-tags
```

## Dependencies

* [Plugin Update Checker](https://github.com/YahnisElsts/plugin-update-checker/) by @YahnisElsts
