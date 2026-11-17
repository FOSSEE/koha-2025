<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\MacroNamespace;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Sandbox\SecurityNotAllowedTestError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* @help_topics/filter.overview.html.twig */
class __TwigTemplate_5903d3ee843f3dd23f296f13cab77a7c extends Template
{
    private Source $source;
    /**
     * @var array<string, MacroNamespace>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        $this->sandbox = $env->getExtension(SandboxExtension::class)->getChecker();
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 10
        $context["overview_link_text"] = ('' === $tmp = implode('', iterator_to_array((function () use (&$context, $macros, $blocks) {
            yield t("Text formats and editors", []);
            yield from [];
        })(), false))) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 11
        $context["overview_link"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\help\HelpTwigExtension']->getRouteLink(($context["overview_link_text"] ?? null), "filter.admin_overview"));
        // line 12
        yield "<h2>";
        yield t("Goal", []);
        yield "</h2>
<p>";
        // line 13
        yield t("Configure text formats on the site.", []);
        yield "</p>
<h2>";
        // line 14
        yield t("What are text filters and text formats?", []);
        yield "</h2>
<p>";
        // line 15
        yield t("A text filter is a processing step that can be applied to text, either to transform it in some way (such as converting URLs in the text into HTML links), or to defend against potentially-dangerous input from site users. A text format is an ordered sequence of text filters. Text filters are provided by modules; text formats are managed by the core Filter module.", []);
        yield "</p>
<p>";
        // line 16
        yield t("Text fields that have \"formatted\" in the field type name, such as <em>Text (formatted)</em>, use text formats. Users choose the text format when editing the field text; when the field text is shown on the site, it is processed by the chosen text format. Administrators can configure text formats and assign permissions for who can use each format. If the core Text Editor module is enabled, administrators can also associate visual editors with text formats.", []);
        yield "</p>
<h2>";
        // line 17
        yield t("What text filters are available?", []);
        yield "</h2>
<p>";
        // line 18
        yield t("Some of the more commonly used text filters are:", []);
        yield "</p>
<dl>
  <dt>";
        // line 20
        yield t("Limit allowed HTML tags and correct faulty HTML", []);
        yield "</dt>
  <dd>";
        // line 21
        yield t("Limits which HTML tags can be used; useful both for site security and enforcing site design.", []);
        yield "</dd>
  <dt>";
        // line 22
        yield t("Convert line breaks into HTML", []);
        yield "</dt>
  <dd>";
        // line 23
        yield t("Line breaks in HTML source are displayed as horizontal spaces. This filter converts line breaks into HTML paragraph and line break tags.", []);
        yield "</dd>
  <dt>";
        // line 24
        yield t("Convert URLs into links", []);
        yield "</dt>
  <dd>";
        // line 25
        yield t("Takes plain URLs in text and turns them into HTML links.", []);
        yield "</dd>
  <dt>";
        // line 26
        yield t("Restrict images to this site", []);
        yield "</dt>
  <dd>";
        // line 27
        yield t("For text formats that allow HTML image tags, restricts images to URLs within this site.", []);
        yield "</dd>
</dl>
<h2>";
        // line 29
        yield t("Steps", []);
        yield "</h2>
<ol>
  <li>";
        // line 31
        yield t("In the <em>Manage</em> administrative menu, navigate to <em>Configuration</em> &gt; <em>Content Authoring</em> &gt; <em>@overview_link</em>. If you do not have the core Text Editor module installed, the menu link and page title will instead be <em>Text formats</em>.", ["@overview_link" => $this->env->getExtension(\Drupal\Core\Template\TwigExtension::class)->renderVar(($context["overview_link"] ?? null)), ]);
        yield "</li>
  <li>";
        // line 32
        yield t("Click <em>Configure</em> to configure an existing text format, or <em>+ Add text format</em> to create a new text format.", []);
        yield "</li>
  <li>";
        // line 33
        yield t("Enter the desired <em>Name</em> for the text format.", []);
        yield "</li>
  <li>";
        // line 34
        yield t("Check the <em>Roles</em> that can use this text format. Some HTML tags allow users to embed malicious links or scripts in text. To ensure security, anonymous and untrusted users should only have access to text formats that restrict them to either plain text or a safe set of HTML tags. <strong>Improper text format configuration is a security risk.</strong>", []);
        yield "</li>
  <li>";
        // line 35
        yield t("If the core Text Editor module is installed, see the related topic to connect a text editor to this text format.", []);
        yield "</li>
  <li>";
        // line 36
        yield t("Under <em>Enabled filters</em>, check the text filters that you want to use.", []);
        yield "</li>
  <li>";
        // line 37
        yield t("Under <em>Filter processing order</em>, drag the filters to the correct order. Choose the order carefully; for example, if you have a filter that results in a particular HTML tag being added to the text, that should run after a filter that restricts HTML tags, to avoid deleting the new tags the first filter added.", []);
        yield "</li>
  <li>";
        // line 38
        yield t("Under <em>Filter settings</em>, verify and adjust the settings for each active filter that has configuration options.", []);
        yield "</li>
  <li>";
        // line 39
        yield t("Click <em>Save configuration</em>, which will return you to the <em>Text formats and editors</em> page.", []);
        yield "</li>
  <li>";
        // line 40
        yield t("Repeat these steps if you have additional text formats to configure.", []);
        yield "</li>
</ol>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@help_topics/filter.overview.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  156 => 40,  152 => 39,  148 => 38,  144 => 37,  140 => 36,  136 => 35,  132 => 34,  128 => 33,  124 => 32,  120 => 31,  115 => 29,  110 => 27,  106 => 26,  102 => 25,  98 => 24,  94 => 23,  90 => 22,  86 => 21,  82 => 20,  77 => 18,  73 => 17,  69 => 16,  65 => 15,  61 => 14,  57 => 13,  52 => 12,  50 => 11,  45 => 10,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@help_topics/filter.overview.html.twig", "/var/www/html/Koha-2025/core/modules/filter/help_topics/filter.overview.html.twig");
    }
    
    public function ensureSecurityChecked(): void
    {
        if ($this->sandbox->isSandboxed($this->source)) {
            $this->checkSecurity();
        }
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 10, "trans" => 10];
        static $filters = ["escape" => 31];
        static $functions = ["render_var" => 11, "help_route_link" => 11];
        static $tests = [];

        try {
            $this->sandbox->checkSecurity(
                [0 => "set", 1 => "trans"],
                [0 => "escape"],
                [0 => "render_var", 1 => "help_route_link"],
                [],
                $this->source
            );
        } catch (SecurityError $e) {
            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            } elseif ($e instanceof SecurityNotAllowedTestError && isset($tests[$e->getTestName()])) {
                $e->setTemplateLine($tests[$e->getTestName()]);
            }

            throw $e;
        }

    }
}
