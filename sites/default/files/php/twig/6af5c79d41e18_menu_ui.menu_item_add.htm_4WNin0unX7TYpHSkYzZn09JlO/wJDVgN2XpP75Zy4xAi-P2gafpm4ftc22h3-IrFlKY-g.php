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

/* @help_topics/menu_ui.menu_item_add.html.twig */
class __TwigTemplate_5a14fa543401b6ff829f89ef4b65955a extends Template
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
        // line 8
        $context["structure_menu_text"] = ('' === $tmp = implode('', iterator_to_array((function () use (&$context, $macros, $blocks) {
            yield t("Menus", []);
            yield from [];
        })(), false))) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 9
        $context["structure_menu_link"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\help\HelpTwigExtension']->getRouteLink(($context["structure_menu_text"] ?? null), "entity.menu.collection"));
        // line 10
        yield "<h2>";
        yield t("Goal", []);
        yield "</h2>
<p>";
        // line 11
        yield t("Add a link to a menu. Note that you can also add a link to a menu from the content edit page if menu settings have been configured for the content type.", []);
        yield "</p>
<h2>";
        // line 12
        yield t("Steps", []);
        yield "</h2>
<ol>
  <li>";
        // line 14
        yield t("In the <em>Manage</em> administration menu, navigate to <em>Structure</em> &gt; @structure_menu_link.", ["@structure_menu_link" => $this->env->getExtension(\Drupal\Core\Template\TwigExtension::class)->renderVar(($context["structure_menu_link"] ?? null)), ]);
        yield "</li>
  <li>";
        // line 15
        yield t("Locate the desired menu and click <em>Add link</em> in the <em>Operations</em> list.", []);
        yield "</li>
  <li>";
        // line 16
        yield t("Enter the <em>Menu link title</em> to be displayed.", []);
        yield "</li>
  <li>";
        // line 17
        yield t("Enter the <em>Link</em>, one of the following:", []);
        // line 18
        yield "    <ul>
      <li>";
        // line 19
        yield t("An internal path, such as <em>/node/add</em>", []);
        yield "</li>
      <li>";
        // line 20
        yield t("A full external URL", []);
        yield "</li>
      <li>";
        // line 21
        yield t("Start typing the title of a content item and select it when the full title comes up", []);
        yield "</li>
      <li>";
        // line 22
        yield t("<em>&lt;nolink&gt;</em> to display the <em>Menu link title</em> as plain text without a link", []);
        yield "</li>
      <li>";
        // line 23
        yield t("<em>&lt;front&gt;</em> to link to the front page of your site", []);
        yield "</li>
    </ul>
  </li>
  <li>";
        // line 26
        yield t("Make sure that <em>Enabled</em> is checked; if not, the menu link will not be displayed.", []);
        yield "</li>
  <li>";
        // line 27
        yield t("Optionally, enter a <em>Description</em>, which will be displayed when a user hovers over the link.", []);
        yield "</li>
  <li>";
        // line 28
        yield t("Optionally, check <em>Show as expanded</em> to automatically show the children of this link (if any) when this link is shown.", []);
        yield "</li>
  <li>";
        // line 29
        yield t("Optionally, select the <em>Parent link</em>, if this menu link should be a child of another menu link.", []);
        yield "</li>
  <li>";
        // line 30
        yield t("Click <em>Save</em>. You will be returned to the <em>Add link</em> page to add another link.", []);
        yield "</li>
  <li>";
        // line 31
        yield t("In the <em>Manage</em> administration menu, navigate to <em>Structure</em> &gt; @structure_menu_link.", ["@structure_menu_link" => $this->env->getExtension(\Drupal\Core\Template\TwigExtension::class)->renderVar(($context["structure_menu_link"] ?? null)), ]);
        yield "</li>
  <li>";
        // line 32
        yield t("Locate the menu you just added a link to and click <em>Edit</em> in the <em>Operations</em> list.", []);
        yield "</li>
  <li>";
        // line 33
        yield t("Verify that the order of links is correct. If it is not, drag menu links until the order is correct, and click <em>Save</em>.", []);
        yield "</li>
</ol>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@help_topics/menu_ui.menu_item_add.html.twig";
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
        return array (  133 => 33,  129 => 32,  125 => 31,  121 => 30,  117 => 29,  113 => 28,  109 => 27,  105 => 26,  99 => 23,  95 => 22,  91 => 21,  87 => 20,  83 => 19,  80 => 18,  78 => 17,  74 => 16,  70 => 15,  66 => 14,  61 => 12,  57 => 11,  52 => 10,  50 => 9,  45 => 8,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@help_topics/menu_ui.menu_item_add.html.twig", "/var/www/html/Koha-2025/core/modules/menu_ui/help_topics/menu_ui.menu_item_add.html.twig");
    }
    
    public function ensureSecurityChecked(): void
    {
        if ($this->sandbox->isSandboxed($this->source)) {
            $this->checkSecurity();
        }
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 8, "trans" => 8];
        static $filters = ["escape" => 14];
        static $functions = ["render_var" => 9, "help_route_link" => 9];
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
