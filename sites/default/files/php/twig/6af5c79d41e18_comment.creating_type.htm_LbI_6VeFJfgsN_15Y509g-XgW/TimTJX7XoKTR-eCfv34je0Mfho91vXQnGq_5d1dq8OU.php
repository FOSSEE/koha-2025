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

/* @help_topics/comment.creating_type.html.twig */
class __TwigTemplate_95f0e384a615698ea5166f013eeaffbf extends Template
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
        $context["comment_types_link_text"] = ('' === $tmp = implode('', iterator_to_array((function () use (&$context, $macros, $blocks) {
            // line 11
            yield "  ";
            yield t("Comment types", []);
            yield from [];
        })(), false))) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 13
        $context["comment_types_link"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\help\HelpTwigExtension']->getRouteLink(($context["comment_types_link_text"] ?? null), "entity.comment_type.collection"));
        // line 14
        $context["comment_permissions_link_text"] = ('' === $tmp = implode('', iterator_to_array((function () use (&$context, $macros, $blocks) {
            // line 15
            yield "  ";
            yield t("Administer comment types and settings", []);
            yield from [];
        })(), false))) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 17
        $context["comment_permissions_link"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\help\HelpTwigExtension']->getRouteLink(($context["comment_permissions_link_text"] ?? null), "user.admin_permissions.module", ["modules" => "comment"]));
        // line 18
        $context["comment_overview_topic"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\help\HelpTwigExtension']->getTopicLink("comment.overview"));
        // line 19
        $context["content_structure_topic"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\help\HelpTwigExtension']->getTopicLink("core.content_structure"));
        // line 20
        yield "<h2>";
        yield t("Goal", []);
        yield "</h2>
<p>";
        // line 21
        yield t("Create a new comment type. See @comment_overview_topic for information about comments and comment types.", ["@comment_overview_topic" => $this->env->getExtension(\Drupal\Core\Template\TwigExtension::class)->renderVar(($context["comment_overview_topic"] ?? null)), ]);
        yield "</p>
<h2>";
        // line 22
        yield t("Who can create a comment type?", []);
        yield "</h2>
<p>";
        // line 23
        yield t("Users with the <em>@comment_permissions_link</em> permission (typically administrators) can create comment types.", ["@comment_permissions_link" => $this->env->getExtension(\Drupal\Core\Template\TwigExtension::class)->renderVar(($context["comment_permissions_link"] ?? null)), ]);
        yield "</p>
<h2>";
        // line 24
        yield t("Steps", []);
        yield "</h2>
<ol>
  <li>";
        // line 26
        yield t("In the <em>Manage</em> administrative menu, navigate to <em>Structure</em> &gt; <em>@comment_types_link</em>.", ["@comment_types_link" => $this->env->getExtension(\Drupal\Core\Template\TwigExtension::class)->renderVar(($context["comment_types_link"] ?? null)), ]);
        yield "</li>
  <li>";
        // line 27
        yield t("Click <em>Add comment type</em>.", []);
        yield "</li>
  <li>";
        // line 28
        yield t("In the <em>Label</em> field, enter a name for the comment type, which is how it will be listed in the administrative interface.", []);
        yield "</li>
  <li>";
        // line 29
        yield t("In the <em>Target entity type</em> field, select the entity type to be commented on. See @content_structure_topic for more about content entities and fields.", ["@content_structure_topic" => $this->env->getExtension(\Drupal\Core\Template\TwigExtension::class)->renderVar(($context["content_structure_topic"] ?? null)), ]);
        yield "</li>
  <li>";
        // line 30
        yield t("Click <em>Save</em>. The comment type will be created.", []);
        yield "</li>
  <li>";
        // line 31
        yield t("Optionally, if you have the core Field UI module installed you can follow the steps in the related topics to add fields to the new comment type, set up the editing form, and configure the display.", []);
        yield "</li>
</ol>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@help_topics/comment.creating_type.html.twig";
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
        return array (  109 => 31,  105 => 30,  101 => 29,  97 => 28,  93 => 27,  89 => 26,  84 => 24,  80 => 23,  76 => 22,  72 => 21,  67 => 20,  65 => 19,  63 => 18,  61 => 17,  56 => 15,  54 => 14,  52 => 13,  47 => 11,  45 => 10,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@help_topics/comment.creating_type.html.twig", "/var/www/html/Koha-2025/core/modules/comment/help_topics/comment.creating_type.html.twig");
    }
    
    public function ensureSecurityChecked(): void
    {
        if ($this->sandbox->isSandboxed($this->source)) {
            $this->checkSecurity();
        }
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 10, "trans" => 11];
        static $filters = ["escape" => 21];
        static $functions = ["render_var" => 13, "help_route_link" => 13, "help_topic_link" => 18];
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
