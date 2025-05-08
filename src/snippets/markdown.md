HEADERS
===
---

# H1
## H2
### H3
#### H4
##### H5
###### H6

Alternatively, for H1 and H2, an underline-ish style:

Alt-H1
===

Alt-H2
---

EMPHASIS
===
---

Emphasis, aka italics, with *asterisks* or _underscores_.

Strong emphasis, aka bold, with **asterisks** or __underscores__.

Combined emphasis with **asterisks and _underscores_**.

LISTS
===
---

1. First ordered list item
2. Another item
    * Unordered sub-list. 
1. Actual numbers don't matter, just that it's a number
    1. Ordered sub-list
4. And another item.

    You can have properly indented paragraphs within list items. Notice the blank line above, and the leading spaces (at least one, but we'll use four here to also align the raw Markdown).

    To have a line break without a paragraph, you will need to use two trailing spaces.  
    Note that this line is separate, but within the same paragraph.
10. Last item

Unordered lists can use:

* Asterisks
- Or minuses
+ Or pluses

LINKS
===
---

[I'm an inline-style link](https://www.duckduckgo.com)

[I'm an inline-style link with title](https://www.duckduckgo.com "Duckduckgo's Homepage")

[I'm a reference-style link][Arbitrary case-insensitive reference text]

[I'm a relative reference to a repository file](./git)

[You can use numbers for reference-style link definitions][1]

Or leave it empty and use the [link text itself].

Wrap a link in angle brackets <https://www.mozilla.org>. Requires http/https to be present.

Plaintext URLs also get converted if http/https is present; https://www.mozilla.org works but mozilla.org doesn't.

Some text to show that the reference links can follow later.

[arbitrary case-insensitive reference text]: https://www.mozilla.org
[1]: http://imgur.com
[link text itself]: http://www.reddit.com

IMAGES
===
---

Here's the WordPress logo (hover to see the title text):

Inline-style: 
![alt text](https://s.w.org/about/images/wordpress-logo-notext-bg.png "Logo Title Text 1")

Reference-style: 
![alt text][logo]

[logo]: https://s.w.org/about/images/wordpress-logo-notext-bg.png "Logo Title Text 2"

CODE BLOCKS
===
---

Inline `code` has `back-ticks` around it.

Code blocks should be wrapped in 3 backticks ` ``` `

```
// init the flag
$flag = false;
for ($i=0; $i<=10; $i++;) {
    if ($i == 10) {
        $flag = true;
    }
}
```

Code blocks can also be indented by 4 spaces but can be harder to visually distinguish in the markdown.

    // check the flag
    if ($flag == true) {
        // continue to indent
            // for it to appear
                // more indented
                echo $flag;
    }

BLOCKQUOTES
===
---

> Blockquotes are very handy in email to emulate reply text.
> This line is part of the same quote.

Quote break.

> This is a very long line that will still be quoted properly when it wraps. Oh boy let's keep writing to make sure this is long enough to actually wrap for everyone. Oh, you can *put* **Markdown** into a blockquote.

HTML
===
---

Raw HTML can be used directly in markdown files without affecting output. Inline styles are accepted, as well as `<style>` blocks, `<script>` blocks and linking of external assets.

<style>
    table {
        background-color: #e0e0e0;
    }
</style>

 <table style="border: 1px solid black;">
  <tr>
    <th>Firstname</th>
    <th>Lastname</th>
    <th>Age</th>
  </tr>
  <tr>
    <td>Jill</td>
    <td>Smith</td>
    <td>50</td>
  </tr>
  <tr>
    <td>Eve</td>
    <td>Jackson</td>
    <td>94</td>
  </tr>
</table>

<a href="#" id="js-btn">Click me</a> for a javascript triggered alert.

<script type="text/javascript">
    var $btn = document.getElementById('js-btn');
    $btn.onclick = function (e) {
        e.preventDefault();
        alert("Button clicked!")
    };
</script>

UNDERLINES
===
---

Three or more of the following:

Hyphens

---

Asterisks

***

Underscores

___

PARAGRAPHES
===
---

Here's a line for us to start with.

This line is separated from the one above by two newlines, so it will be a *separate paragraph*.

This line is also a separate paragraph, but...
This line is only separated by a single newline, so it's considered as the *same line* in the *same paragraph*.  
This line is also part of the same paragraph but has a break because the above line has 2 trailing spaces.

YOUTUBE
===
---

For specifying width/height and other attributes, use raw HTML.

<a href="http://www.youtube.com/watch?feature=player_embedded&v=ebtXuM9Av3E" target="_blank" style="border-bottom:none;">
    <img src="http://img.youtube.com/vi/ebtXuM9Av3E/0.jpg" alt="IMAGE ALT TEXT HERE" width="240" height="180" />
</a>

Alternatively use markdown inline image formatting, without being able to adjust size and other attributes.

[![YOUTUBE ALT TEXT HERE](http://img.youtube.com/vi/ebtXuM9Av3E/0.jpg)](http://www.youtube.com/watch?v=ebtXuM9Av3E)
