@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="entry-header entry-header-2 mb-50 mt-50 text-center">
            <div class="entry-meta meta-0 font-small mb-30"><a href="category.html"><span class="post-cat bg-success text-white">Elements</span></a></div>
            <h1 class="post-title mb-30">
                Typography - Style Guide
            </h1>
            <div class="entry-meta meta-1 font-x-small color-grey text-uppercase">
                <span>Heading</span>
                <span class="ml-10">Blockquotes</span>
                <span class="ml-10">Table</span>
                <span class="ml-10">Tags</span>
                <span class="ml-10">Code</span>
            </div>
        </div>
        <!--end entry header-->
        <div class="row mb-50">
            <div class="col-lg-2 d-none d-lg-block"></div>
            <div class="col-lg-8 col-md-12">
                <div class="single-social-share single-sidebar-share mt-30">
                    <ul>
                        <li><a class="social-icon facebook-icon text-xs-center" target="_blank" href="#"><i class="ti-facebook"></i></a></li>
                        <li><a class="social-icon twitter-icon text-xs-center" target="_blank" href="#"><i class="ti-twitter-alt"></i></a></li>
                        <li><a class="social-icon pinterest-icon text-xs-center" target="_blank" href="#"><i class="ti-pinterest"></i></a></li>
                        <li><a class="social-icon instagram-icon text-xs-center" target="_blank" href="#"><i class="ti-instagram"></i></a></li>
                        <li><a class="social-icon linkedin-icon text-xs-center" target="_blank" href="#"><i class="ti-linkedin"></i></a></li>
                        <li><a class="social-icon email-icon text-xs-center" target="_blank" href="#"><i class="ti-email"></i></a></li>
                    </ul>
                </div>
                <figure class="post-thumb d-flex mb-30 border-radius-5 img-hover-scale animate-conner-box">
                    <a href="single.html"><img class="border-radius-5" src="assets/imgs/news-23.jpg" alt=""></a>
                </figure>
                <div class="single-excerpt">
                    <p class="font-large">Tolerably much and ouch the in began alas more ouch some then accommodating flimsy wholeheartedly after hello slightly the that cow pouted much a goodness bound rebuilt poetically jaguar groundhog</p>
                </div>
                <div class="entry-main-content">
                    <hr class="wp-block-separator is-style-dots">
                    <h2>Headings</h2>
                    <h1>Header one</h1>
                    <h2>Header two</h2>
                    <h3>Header three</h3>
                    <h4>Header four</h4>
                    <h5>Header five</h5>
                    <h6>Header six</h6>
                    <hr class="wp-block-separator">
                    <h2>Links</h2>
                    <p>If you paste in a URL, like <a href="https://alithemes.com">https://ghost.org</a> - it'll automatically be linked up. But if you want to customise your anchor text, you can do that too! Here's a link to <a href="https://alithemes.com">the Ghost website.</a></p>
                    <hr class="wp-block-separator">
                    <h2>Blockquotes</h2>
                    <p>Single line blockquote:</p>
                    <blockquote>
                        <p>Stay hungry. Stay foolish.</p>
                    </blockquote>
                    <p>Multi line blockquote with a cite reference:</p>
                    <blockquote cite="https://developer.mozilla.org/en-US/docs/Web/HTML/Element/blockquote">
                        <p>The <strong>HTML <code>&lt;blockquote&gt;</code> Element</strong> (or <em>HTML Block Quotation Element</em>) indicates that the enclosed text is an extended quotation. Usually, this is rendered visually by indentation (see <a href="https://developer.mozilla.org/en-US/docs/HTML/Element/blockquote#Notes">Notes</a> for how to change it). A URL for the source of the quotation may be given using the <strong>cite</strong> attribute, while a text representation of the source can be given using the <a href="https://developer.mozilla.org/en-US/docs/Web/HTML/Element/cite" title="The HTML Citation Element <cite> represents a reference to a creative work. It must include the title of a work or a URL reference, which may be in an abbreviated form according to the conventions used for the addition of citation metadata."><code>&lt;cite&gt;</code></a> element.</p>
                    </blockquote>
                    <p><cite>multiple contributors</cite> – MDN HTML element reference – blockquote</p>
                    <hr class="wp-block-separator">
                    <h2>Tables</h2>
                    <table>
                        <thead>
                        <tr>
                            <th>Employee</th>
                            <th>Salary</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th><a href="http://example.org/">John Doe</a></th>
                            <td>$1</td>
                            <td>Because that’s all Steve Jobs needed for a salary.</td>
                        </tr>
                        <tr>
                            <th><a href="http://example.org/">Jane Doe</a></th>
                            <td>$100K</td>
                            <td>For all the blogging she does.</td>
                        </tr>
                        <tr>
                            <th><a href="http://example.org/">Fred Bloggs</a></th>
                            <td>$100M</td>
                            <td>Pictures are worth a thousand words, right? So Jane x 1,000.</td>
                        </tr>
                        <tr>
                            <th><a href="http://example.org/">Jane Bloggs</a></th>
                            <td>$100B</td>
                            <td>With hair like that?! Enough said…</td>
                        </tr>
                        </tbody>
                    </table>
                    <hr class="wp-block-separator">
                    <h2>Definition Lists</h2>
                    <dl>
                        <dt>Definition List Title</dt>
                        <dd>Definition list division.</dd>
                        <dt>Startup</dt>
                        <dd>A startup company or startup is a company or temporary organization designed to search for a repeatable and scalable business model.</dd>
                        <dt>#dowork</dt>
                        <dd>Coined by Rob Dyrdek and his personal body guard Christopher “Big Black” Boykins, “Do Work” works as a self motivator, to motivating your friends.</dd>
                        <dt>Do It Live</dt>
                        <dd>I’ll let Bill O’Reilly will <a title="We'll Do It Live" href="https://www.youtube.com/watch?v=O_HyZ5aW76c">explain</a> this one.</dd>
                    </dl>
                    <hr class="wp-block-separator">
                    <h2>Unordered Lists (Nested)</h2>
                    <ul>
                        <li>List item one
                            <ul>
                                <li>List item one
                                    <ul>
                                        <li>List item one</li>
                                        <li>List item two</li>
                                        <li>List item three</li>
                                        <li>List item four</li>
                                    </ul>
                                </li>
                                <li>List item two</li>
                                <li>List item three</li>
                                <li>List item four</li>
                            </ul>
                        </li>
                        <li>List item two</li>
                        <li>List item three</li>
                        <li>List item four</li>
                    </ul>
                    <hr class="wp-block-separator">
                    <h2>Ordered List (Nested)</h2>
                    <ol start="8">
                        <li>List item one -start at 8
                            <ol>
                                <li>List item one
                                    <ol reversed="reversed">
                                        <li>List item one -reversed attribute</li>
                                        <li>List item two</li>
                                        <li>List item three</li>
                                        <li>List item four</li>
                                    </ol>
                                </li>
                                <li>List item two</li>
                                <li>List item three</li>
                                <li>List item four</li>
                            </ol>
                        </li>
                        <li>List item two</li>
                        <li>List item three</li>
                        <li>List item four</li>
                    </ol>
                    <hr class="wp-block-separator">
                    <h2>HTML Tags</h2>
                    <p>These supported tags come from the WordPress.com code <a title="Code" href="https://en.support.wordpress.com/code/">FAQ</a>.</p>
                    <p><strong>Address Tag</strong></p>
                    <address>1 Infinite Loop<br>
                        Cupertino, CA 95014<br>
                        United States</address>
                    <p><strong>Anchor Tag (aka. Link)</strong></p>
                    <p>This is an example of a <a title="WordPress Foundation" href="https://wordpressfoundation.org/">link</a>.</p>
                    <p><strong>Abbreviation Tag</strong></p>
                    <p>The abbreviation <abbr title="Seriously">srsly</abbr> stands for “seriously”.</p>
                    <p><strong>Acronym Tag (<em>deprecated in HTML5</em>)</strong></p>
                    <p>The acronym <acronym title="For The Win">ftw</acronym> stands for “for the win”.</p>
                    <p><strong>Big Tag</strong> (<em>deprecated in HTML5</em>)</p>
                    <p>These tests are a <big>big</big> deal, but this tag is no longer supported in HTML5.</p>
                    <p><strong>Cite Tag</strong></p>
                    <p>“Code is poetry.” —<cite>Automattic</cite></p>
                    <p><strong>Code Tag</strong></p>
                    <p>This tag styles blocks of code.<br>
                        <code>.post-title {<br>
                            margin: 0 0 5px;<br>
                            font-weight: bold;<br>
                            font-size: 38px;<br>
                            line-height: 1.2;<br>
                            and here's a line of some really, really, really, really long text, just to see how it is handled and to find out how it overflows;<br>
                            }</code><br>
                        You will learn later on in these tests that <code>word-wrap: break-word;</code> will be your best friend.</p>
                    <p><strong>Delete Tag</strong></p>
                    <p>This tag will let you <del cite="deleted it">strike out text</del>, but this tag is <em>recommended</em> supported in HTML5 (use the <code>&lt;s&gt;</code> instead).</p>
                    <p><strong>Emphasize Tag</strong></p>
                    <p>The emphasize tag should <em>italicize</em> <i>text</i>.</p>
                    <p><strong>Horizontal Rule Tag</strong></p>
                    <hr>
                    <p>This sentence is following a <code>&lt;hr /&gt;</code> tag.</p>
                    <p><strong>Insert Tag</strong></p>
                    <p>This tag should denote <ins cite="inserted it">inserted</ins> text.</p>
                    <p><strong>Keyboard Tag</strong></p>
                    <p>This scarcely known tag emulates <kbd>keyboard text</kbd>, which is usually styled like the <code>&lt;code&gt;</code> tag.</p>
                    <p><strong>Preformatted Tag</strong></p>
                    <p>This tag is for preserving whitespace as typed, such as in poetry or ASCII art.</p>
                    <hr class="wp-block-separator">
                    <h2>The Road Not Taken</h2>
                    <pre><cite>Robert Frost</cite>
                                  Two roads diverged in a yellow wood,
                                  And sorry I could not travel both          (\_/)
                                  And be one traveler, long I stood         (='.'=)
                                  And looked down one as far as I could     (")_(")
                                  To where it bent in the undergrowth;

                                  Then took the other, as just as fair,
                                  And having perhaps the better claim,          |\_/|
                                  Because it was grassy and wanted wear;       / @ @ \
                                  Though as for that the passing there        ( &gt; º &lt; )
                                  Had worn them really about the same,         `&gt;&gt;x&lt;&lt;´
                                                                               /  O  \
                                  And both that morning equally lay
                                  In leaves no step had trodden black.
                                  Oh, I kept the first for another day!
                                  Yet knowing how way leads on to way,
                                  I doubted if I should ever come back.

                                  I shall be telling this with a sigh
                                  Somewhere ages and ages hence:
                                  Two roads diverged in a wood, and I—
                                  I took the one less traveled by,
                                  And that has made all the difference.


                                  and here's a line of some really, really, really, really long text, just to see how it is handled and to find out how it overflows;
                                </pre>
                    <p><strong>Quote Tag</strong> for short, inline quotes</p>
                    <p><q>Developers, developers, developers...</q> --Steve Ballmer</p>
                    <p><strong>Strike Tag</strong> (<em>deprecated in HTML5</em>) and <strong>S Tag</strong></p>
                    <p>This tag shows <strike>strike-through</strike> <s>text</s>.</p>
                    <p><strong>Small Tag</strong></p>
                    <p>This tag shows <small>smaller<small> text.</small></small></p>
                    <p><strong>Strong Tag</strong></p>
                    <p>This tag shows <strong>bold<strong> text.</strong></strong></p>
                    <p><strong>Subscript Tag</strong></p>
                    <p>Getting our science styling on with H<sub>2</sub>O, which should push the "2" down.</p>
                    <p><strong>Superscript Tag</strong></p>
                    <p>Still sticking with science and Albert Einstein's E = MC<sup>2</sup>, which should lift the 2 up.</p>
                    <p><strong>Teletype Tag </strong>(<em>obsolete in HTML5</em>)</p>
                    <p>This rarely used tag emulates <tt>teletype text</tt>, which is usually styled like the <code>&lt;code&gt;</code> tag.</p>
                    <p><strong>Underline Tag</strong> <em>deprecated in HTML 4, re-introduced in HTML5 with other semantics</em></p>
                    <p>This tag shows <u>underlined text</u>.</p>
                    <p><strong>Variable Tag</strong></p>
                    <p>This allows you to denote <var>variables</var>.</p>
                    <div class="clearfix"></div>
                </div>
                <div class="entry-bottom mt-50 mb-30">
                    <div class="overflow-hidden mt-30">
                        <div class="single-social-share float-left">
                            <ul class="d-inline-block list-inline">
                                <li class="list-inline-item"><span class="font-small text-muted"><i class="ti-sharethis mr-5"></i>Share: </span></li>
                                <li class="list-inline-item"><a class="social-icon facebook-icon text-xs-center" target="_blank" href="#"><i class="ti-facebook"></i></a></li>
                                <li class="list-inline-item"><a class="social-icon twitter-icon text-xs-center" target="_blank" href="#"><i class="ti-twitter-alt"></i></a></li>
                                <li class="list-inline-item"><a class="social-icon pinterest-icon text-xs-center" target="_blank" href="#"><i class="ti-pinterest"></i></a></li>
                                <li class="list-inline-item"><a class="social-icon instagram-icon text-xs-center" target="_blank" href="#"><i class="ti-instagram"></i></a></li>
                                <li class="list-inline-item"><a class="social-icon linkedin-icon text-xs-center" target="_blank" href="#"><i class="ti-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
