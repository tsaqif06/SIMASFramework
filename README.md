<a name="readme-top"></a>

[![Contributors][contributors-shield]][contributors-url]
[![Forks][forks-shield]][forks-url]
[![Stargazers][stars-shield]][stars-url]
[![Issues][issues-shield]][issues-url]
[![MIT License][license-shield]][license-url]

<br />
<div align="center">

  <h3 align="center">SIMAS Framework</h3>

  <p align="center">
    An PHP Framework to help you develope website easier!
    <br />
    <br />
    <br />
    <a href="https://github.com/tsaqif06/SIMASFramework/issues">Report Bug</a>
    ·
    <a href="https://github.com/tsaqif06/SIMASFramework/issues">Request Feature</a>
  </p>
</div>

<details>
  <summary>Table of Contents</summary>
  <ol>
    <li>
      <a href="#about-the-project">About The Project</a>
    </li>
    <li>
      <a href="#getting-started">Getting Started</a>
      <ul>
        <li><a href="#prerequisites">Prerequisites</a></li>
        <li><a href="#installation">Installation</a></li>
      </ul>
    </li>
    <li><a href="#contributing">Contributing</a></li>
    <li><a href="#license">License</a></li>
    <li><a href="#contact">Contact</a></li>
  </ol>
</details>

## About The Project

An php framework to help you develope website more easier, and this framework was created for several purposes

Here's why:

- Developed to streamline web development processes and ensure code consistency
- Built with Native PHP to ensure long-term maintainability and minimal dependencies
- Successfully implemented as a core structure for several internal web projects at PT Tiga Pilar Garuda

<br>

**_DISCLAIMER_**
_This framework is still under development, so if there are bugs or more desired features, please just fill in the issues in this GitHub repository. This framework will continue to be updated in line with the progress of the times_

<p align="right">(<a href="#readme-top">back to top</a>)</p>

<!-- GETTING STARTED -->

## Getting Started

This is an example of how you may give instructions on setting up your project locally.
To get a local copy up and running follow these simple example steps.

### Prerequisites

This is an example of how to list things you need to use the software and how to install them.

- ```php 8.1``` or newer
- ```composer```
  install it manually from the [composer official website](https://getcomposer.org/)

### Installation

_Below is an example of how you can instruct your audience on installing and setting up your app. This template doesn't rely on any external dependencies or services._

1. Clone the repo
   ```sh
   git clone https://github.com/tsaqif06/SIMASFramework.git
   ```
2. Install composer packages
   ```sh
   composer install
   ```
3. Generate `.env` file

   ```sh
   cp .env.example .env
   ```

4. You’ll need to modify the following block of settings to match your website configuration:
   ```sh
   APP_NAME=SIMASFramework
   APP_DEBUG=true
   DB_DRIVER=mysql
   DB_HOST=localhost
   DB_PORT=3306
   DB_NAME=
   DB_USER=root
   DB_PASS=
   JWT_KEY=
   APP_LANG=en
   ```
5. You need to migrate the database located in the `database` folder by visiting the `/runmigrate` path in the URL. But if you're ready to publish the website, you can remove the `/runmigrate` route in `routes/route.php`

6. In this file, there is already a demonstration of using the SIMAS Framework. Please go to the path ```/register``` and fill in the data, which will then be directed to ```/login```. After that, log in, and you will be directed to ```/user```, where there is an example of using CRUD in this framework


<p align="right">(<a href="#readme-top">back to top</a>)</p>

<!-- CONTRIBUTING -->

## Contributing

Contributions are what make the open source community such an amazing place to learn, inspire, and create. Any contributions you make are **greatly appreciated**.

If you have a suggestion that would make this better, please fork the repo and create a pull request. You can also simply open an issue with the tag "enhancement".
Don't forget to give the project a star! Thanks again!

1. Fork the Project
2. Create your Feature Branch (`git checkout -b feature/AmazingFeature`)
3. Commit your Changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the Branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

<p align="right">(<a href="#readme-top">back to top</a>)</p>

<!-- LICENSE -->

## License

Distributed under the MIT License. See `LICENSE` for more information.

<p align="right">(<a href="#readme-top">back to top</a>)</p>

<!-- CONTACT -->

## Contact

Project Link: [https://github.com/tsaqif06/SIMASFramework](https://github.com/tsaqif06/SIMASFramework)

<p align="right">(<a href="#readme-top">back to top</a>)</p>

[contributors-shield]: https://img.shields.io/github/contributors/tsaqif06/SIMASFramework.svg?style=for-the-badge
[contributors-url]: https://github.com/tsaqif06/SIMASFramework/graphs/contributors
[forks-shield]: https://img.shields.io/github/forks/tsaqif06/SIMASFramework.svg?style=for-the-badge
[forks-url]: https://github.com/tsaqif06/SIMASFramework/network/members
[stars-shield]: https://img.shields.io/github/stars/tsaqif06/SIMASFramework.svg?style=for-the-badge
[stars-url]: https://github.com/tsaqif06/SIMASFramework/stargazers
[issues-shield]: https://img.shields.io/github/issues/tsaqif06/SIMASFramework.svg?style=for-the-badge
[issues-url]: https://github.com/tsaqif06/SIMASFramework/issues
[license-shield]: https://img.shields.io/github/license/tsaqif06/SIMASFramework.svg?style=for-the-badge
[license-url]: https://github.com/tsaqif06/SIMASFramework/blob/master/LICENSE.txt
[linkedin-shield]: https://img.shields.io/badge/-LinkedIn-black.svg?style=for-the-badge&logo=linkedin&colorB=555
[linkedin-url]: https://linkedin.com/in/tsaqif06
[product-screenshot]: images/screenshot.png
[Next.js]: https://img.shields.io/badge/next.js-000000?style=for-the-badge&logo=nextdotjs&logoColor=white
[PHP-url]: https://www.php.net/
[React.js]: https://img.shields.io/badge/React-20232A?style=for-the-badge&logo=react&logoColor=61DAFB
[React-url]: https://reactjs.org/
[Vue.js]: https://img.shields.io/badge/Vue.js-35495E?style=for-the-badge&logo=vuedotjs&logoColor=4FC08D
[Vue-url]: https://vuejs.org/
[Angular.io]: https://img.shields.io/badge/Angular-DD0031?style=for-the-badge&logo=angular&logoColor=white
[Angular-url]: https://angular.io/
[Svelte.dev]: https://img.shields.io/badge/Svelte-4A4A55?style=for-the-badge&logo=svelte&logoColor=FF3E00
[Svelte-url]: https://svelte.dev/
[Laravel.com]: https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge&logo=laravel&logoColor=white
[Laravel-url]: https://laravel.com
[Bootstrap.com]: https://img.shields.io/badge/Bootstrap-563D7C?style=for-the-badge&logo=bootstrap&logoColor=white
[Bootstrap-url]: https://getbootstrap.com
[JQuery.com]: https://img.shields.io/badge/jQuery-0769AD?style=for-the-badge&logo=jquery&logoColor=white
[JQuery-url]: https://jquery.com
