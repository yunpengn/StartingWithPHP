## Starting with PHP

**Starting with PHP** is a PHP workshop targeted at beginners. The audience are generally expected to 
- Solid background in procedural & object-oriented programming;
- A reasonable amount of knowledge in HTML, CSS, JavaScript.

## Slides

<iframe src="https://docs.google.com/presentation/d/e/2PACX-1vTK45QYtpVLfFcmdGWn6RMjqwssB8WozFflZy_TS_EDo1j3TZHZCz-EOlWj4ozgJnrEOb4QGsMeu2kI/embed?start=false&loop=false&delayms=60000" id="powerpoint" frameborder="0" height="500" allowfullscreen="true" mozallowfullscreen="true" webkitallowfullscreen="true" style="position: relative; width: 100%;"></iframe>

<script type="text/javascript">
	document.addEventListener("DOMContentLoaded", function() {
		var width = document.getElementById('powerpoint').getBoundingClientRect().width;
		var height = width / 1280 * 749;
		document.getElementById('powerpoint').style.height = "" + height + "px";
	});
</script>

## Repository structure

- The folder 'basic' contains the source code corresponding to the introduction section of the slides.
- The folder 'syntax' contains the source code corresponding to the PHP syntax section of the slides.
- The folder 'bootstrap' contains the source code corresponding to the Bootstrap section of the slides.
- The folder 'datatable' contains the source code corresponding to the Datatable section of the slides.
- The folder 'example' is a [Git submodule](https://git-scm.com/book/en/v2/Git-Tools-Submodules), which links the source code for the login/sign-up example in MVC section of the slides.

## Setup Instructions

- Download the latest version of Bitnami WAPP/MAPP/LAPP with PHP 7.1.x
	- Windows: [https://bitnami.com/stack/wapp/installer](https://bitnami.com/stack/wapp/installer)
	- Mac OS: [https://bitnami.com/stack/mapp/installer](https://bitnami.com/stack/mapp/installer)
	- Linux: [https://bitnami.com/stack/lapp/installer](https://bitnami.com/stack/lapp/installer)
- Clone the project into your local disk using SSH (_please specify the `recurse-submodules` option so that all submodules are also cloned_)
```bash
git clone --recurse-submodules git@github.com:yunpengn/StartingWithPHP.git
```
or HTTPS
```bash
git clone --recurse-submodules https://github.com/yunpengn/StartingWithPHP.git
```
or simply download from [here](https://github.com/yunpengn/StartingWithPHP/archive/master.zip) _(not recommended)_.
- Optionally, if you want to set up the login/sign-up example,
	- Make sure you have cloned the `example` submodule as well;
	- Follow the instructions stated at [here](https://github.com/yunpengn/PHP-MVC/tree/example#how-to-use).

## Licence

This repository is under [GNU General Public Licence 3.0](LICENSE).

You have the freedom to distribute copies of any content within this repository, **if and only if**, under the same licence. In other words, you must make sure that these copies are also free and open source.

Also, anything provided here is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
