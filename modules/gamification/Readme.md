# Merchant Expertise

## About

Become an e-commerce expert within the blink of an eye!

## Reporting issues

All issues are tracked in the main PrestaShop repository: [submit an issue here][submit-issue].

## Contributing

PrestaShop modules are open-source extensions to the PrestaShop e-commerce solution. Everyone is welcome and even encouraged to contribute with their own improvements.

### Requirements

Contributors **must** follow the following rules:

* **Make your Pull Request on the "dev" branch**, NOT the "master" branch.
* Do not update the module's version number.
* Follow [the coding standards][coding-standards].

### Process in details

Contributors wishing to edit a module's files should follow the following process:

1. Create your GitHub account, if you do not have one already.
2. Fork the gamification project to your GitHub account.
3. Clone your fork to your local machine in the ```/modules``` directory of your PrestaShop installation.
4. Create a branch in your local clone of the module for your changes.
5. Change the files in your branch. Be sure to follow [the coding standards][coding-standards]!
6. Push your changed branch to your fork in your GitHub account.
7. Create a pull request for your changes **on the _'dev'_ branch** of the module's project. Be sure to follow [the contribution guidelines][contrib-guidelines] in your pull request. If you need help to make a pull request, read the [Github help page about creating pull requests][help-pr].
8. Wait for one of the core developers either to include your change in the codebase, or to comment on possible improvements you should make to your code.

That's it: you have contributed to this open-source project! Congratulations!

[submit-issue]: https://github.com/PrestaShop/PrestaShop/issues/new/choose
[coding-standards]: https://devdocs.prestashop.com/1.7/development/coding-standards/
[contrib-guidelines]: https://devdocs.prestashop.com/1.7/contribute/contribution-guidelines/
[help-pr]: https://help.github.com/articles/using-pull-requests

### Execute the testsuite

This module is shipped with a testsuite using PHPUnit, you need Composer to install the dependencies:

```
composer install
composer test
```

### Versions of PrestaShop supported

This module is compatible with 1.6.1.x and 1.7.x versions.

> As of 31th of october, 2018, PrestaShop 1.6.1.x will only receives security patches.

This module is maintained for 1.7.4.x and above *only*.
