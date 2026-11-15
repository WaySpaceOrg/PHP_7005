# Copilot instructions

## Project shape

- This repository is a Thai-language web development exercise site. `index.html` is a static landing page; lessons include standalone HTML exercises and PHP teaching examples, not a larger PHP application.
- Exercises are grouped by lesson in `Lesson1/`, `Lesson2/`, `Lesson3/`, and `Lesson5/`; HTML exercises use filenames such as `ex1.html`, and PHP tasks use names such as `Task2php.php`.
- HTML exercises are complete pages with embedded styles and repeated site chrome. Lesson 5 PHP pages share `Lesson5/lesson5.css` and use the same branded header, task navigation, hero, content panel, and footer.
- The exercises progress from basic HTML and profile content (Lesson 1), through page structure, tables, links, and forms (Lesson 2), to introductory JavaScript and DOM interaction (Lesson 3), with PHP variables, operators, strings, and output examples in Lesson 5. JavaScript examples are inline in their HTML pages; some Lesson 2 exercises also contain simple interactions.

## Commands

- There is no configured build, automated test suite, or lint command in the repository (no package/composer manifest or test configuration is present).
- Check an individual PHP file's syntax with `php -l Lesson5/Task2php.php`, replacing the path with the file being edited.
- Preview static HTML with `python3 -m http.server 8000` from the repository root. To render PHP pages, use `php -S 127.0.0.1:8000` from the root, then open `http://127.0.0.1:8000/`. Stop the server with Ctrl+C.
- Run the CLI version of Task 6 with `printf '100\n2\n10\n' | php Lesson5/Task6php.php`; browser pages need the PHP server above.
- To check a specific exercise, open its corresponding URL, for example `http://localhost:8000/Lesson3/ex6.html`, and exercise its visible controls. There is no separate single-test command.

## Repository-specific conventions

- Keep page content in Thai and preserve the document's UTF-8 declaration and `lang="th"` attribute.
- Keep each exercise independently openable: use relative links for the home page and neighboring lesson pages. Exercise pages currently include a repeated navigation linking to every exercise; when lesson or exercise paths change, keep that navigation consistent across the lesson pages and update the lesson links in `index.html`.
- Keep the Lesson 5 task links on `index.html` in sync whenever a PHP task is added, renamed, or removed.
- Match the existing visual shell when creating or editing an exercise: the dark branded header, lesson navigation, exercise-number hero, content panel, home link, and footer are part of the site's repeated page pattern. Reuse `Lesson5/lesson5.css` for Lesson 5 PHP pages; HTML lesson pages keep their embedded styles.
- Lesson 3 interactions use inline scripts after the page markup, select controls/elements by their IDs, attach event handlers with `addEventListener`, and display results in the page. Follow that page-local pattern unless the project adopts shared JavaScript assets.
