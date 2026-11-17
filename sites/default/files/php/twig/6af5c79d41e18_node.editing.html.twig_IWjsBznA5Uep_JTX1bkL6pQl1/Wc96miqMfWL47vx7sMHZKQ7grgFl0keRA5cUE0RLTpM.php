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

/* @help_topics/node.editing.html.twig */
class __TwigTemplate_2e2912565be862b69bc35355d71ca68d extends Template
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
        // line 7
        $context["content_link_text"] = ('' === $tmp = implode('', iterator_to_array((function () use (&$context, $macros, $blocks) {
            // line 8
            yield "  ";
            yield t("Content", []);
            yield from [];
        })(), false))) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 10
        $context["content_link"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\help\HelpTwigExtension']->getRouteLink(($context["content_link_text"] ?? null), "system.admin_content"));
        // line 11
        $context["content_permissions_link_text"] = ('' === $tmp = implode('', iterator_to_array((function () use (&$context, $macros, $blocks) {
            // line 12
            yield "  ";
            yield t("Access the Content overview page", []);
            yield from [];
        })(), false))) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 14
        $context["content_permissions_link"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\help\HelpTwigExtension']->getRouteLink(($context["content_permissions_link_text"] ?? null), "user.admin_permissions.module", ["modules" => "node"]));
        // line 15
        $context["node_overview_topic"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\help\HelpTwigExtension']->getTopicLink("node.overview"));
        // line 16
        yield "<h2>";
        yield t("Goal", []);
        yield "</h2>
<p>";
        // line 17
        yield t("Find a content item and edit it, or update a group of content items in bulk. See @node_overview_topic for more about content types and content items.", ["@node_overview_topic" => $this->env->getExtension(\Drupal\Core\Template\TwigExtension::class)->renderVar(($context["node_overview_topic"] ?? null)), ]);
        yield "</p>
<h2>";
        // line 18
        yield t("Who can find and edit content?", []);
        yield "</h2>
<p>";
        // line 19
        yield t("Users with the <em>@content_permissions_link</em> permission can use the <em>Content</em> page to find content. Each content type has its own edit permissions. For example, to edit content of type Article, a user would need the <em>Article: Edit own content</em> permission to edit an article they created, or the <em>Article: Edit any content</em> permission to edit an article someone else created. In addition, users with the <em>Bypass content access control</em> or <em>Administer content</em> permission can edit content items of all types. Some contributed modules change the permission structure for editing content.", ["@content_permissions_link" => $this->env->getExtension(\Drupal\Core\Template\TwigExtension::class)->renderVar(($context["content_permissions_link"] ?? null)), ]);
        yield "</p>
<h2>";
        // line 20
        yield t("Steps", []);
        yield "</h2>
<ol>
  <li>";
        // line 22
        yield t("In the <em>Manage</em> administrative menu, navigate to <em>@content_link</em>.", ["@content_link" => $this->env->getExtension(\Drupal\Core\Template\TwigExtension::class)->renderVar(($context["content_link"] ?? null)), ]);
        yield "</li>
  <li>";
        // line 23
        yield t("Optionally, use filters to reduce the list of content items shown:", []);
        // line 24
        yield "    <ul>
      <li>";
        // line 25
        yield t("<em>Title</em>: key word(s) from the title", []);
        yield "</li>
      <li>";
        // line 26
        yield t("<em>Content type</em>", []);
        yield "</li>
      <li>";
        // line 27
        yield t("<em>Published status</em>", []);
        yield "</li>
      <li>";
        // line 28
        yield t("<em>Language</em>", []);
        yield "</li>
    </ul>
    ";
        // line 30
        yield t("If you enter or select filter values, click <em>Filter</em> to apply the filters.", []);
        yield "</li>
  <li>";
        // line 31
        yield t("Optionally, sort the list by clicking a column header. Click again to reverse the order.", []);
        yield "</li>
  <li>";
        // line 32
        yield t("To edit the title or other field values for one content item, click <em>Edit</em> in the row of the content item. Update the values and click <em>Save</em>.", []);
        yield "</li>
  <li>";
        // line 33
        yield t("A few types of edits can be done in bulk to multiple content items. For example, to publish several unpublished content items, check the boxes in the left column (right column in right-to-left languages) to select the desired content items. For <em>Action</em>, select the <em>Publish content</em> action. Click <em>Apply to selected items</em> to make the change. The other actions under <em>Action</em> work in a similar manner.", []);
        yield "</li>
</ol>
<h2>";
        // line 35
        yield t("Additional resources", []);
        yield "</h2>
<ul>
  <li><a href=\"https://www.drupal.org/docs/user_guide/en/content-chapter.html\">";
        // line 37
        yield t("Basic Page Management (Drupal User Guide)", []);
        yield "</a></li>
  <li><a href=\"https://www.drupal.org/docs/user_guide/en/content-edit.html\">";
        // line 38
        yield t("Editing a Content Item (Drupal User Guide)", []);
        yield "</a></li>
</ul>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@help_topics/node.editing.html.twig";
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
        return array (  139 => 38,  135 => 37,  130 => 35,  125 => 33,  121 => 32,  117 => 31,  113 => 30,  108 => 28,  104 => 27,  100 => 26,  96 => 25,  93 => 24,  91 => 23,  87 => 22,  82 => 20,  78 => 19,  74 => 18,  70 => 17,  65 => 16,  63 => 15,  61 => 14,  56 => 12,  54 => 11,  52 => 10,  47 => 8,  45 => 7,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@help_topics/node.editing.html.twig", "/var/www/html/Koha-2025/core/modules/node/help_topics/node.editing.html.twig");
    }
    
    public function ensureSecurityChecked(): void
    {
        if ($this->sandbox->isSandboxed($this->source)) {
            $this->checkSecurity();
        }
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 7, "trans" => 8];
        static $filters = ["escape" => 17];
        static $functions = ["render_var" => 10, "help_route_link" => 10, "help_topic_link" => 15];
        static $tests = [];

        try {
            $this->sandbox->checkSecurity(
                [0 => "set", 1 => "trans"],
                [0 => "escape"],
                [0 => "render_var", 1 => "help_route_link", 2 => "help_topic_link"],
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
