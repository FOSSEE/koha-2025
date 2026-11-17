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

/* @help_topics/media.media_type.html.twig */
class __TwigTemplate_bc3c7cc577c67dbe6ff0b756cf5f9d93 extends Template
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
        $context["content_structure_topic"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\help\HelpTwigExtension']->getTopicLink("core.content_structure"));
        // line 9
        $context["media_topic"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\help\HelpTwigExtension']->getTopicLink("core.media"));
        // line 10
        $context["media_text"] = ('' === $tmp = implode('', iterator_to_array((function () use (&$context, $macros, $blocks) {
            yield t("Media types", []);
            yield from [];
        })(), false))) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 11
        $context["media_link"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\help\HelpTwigExtension']->getRouteLink(($context["media_text"] ?? null), "entity.media_type.collection"));
        // line 12
        yield "<h2>";
        yield t("Goal", []);
        yield "</h2>
<p>";
        // line 13
        yield t("Add a new media type that can be referenced in Media reference fields; media types are a content entity type. See @media_topic for an overview of media items and media types, and @content_structure_topic for more information on content entities and fields.", ["@media_topic" => $this->env->getExtension(\Drupal\Core\Template\TwigExtension::class)->renderVar(($context["media_topic"] ?? null)), "@content_structure_topic" => $this->env->getExtension(\Drupal\Core\Template\TwigExtension::class)->renderVar(($context["content_structure_topic"] ?? null)), ]);
        yield "</p>
<h2>";
        // line 14
        yield t("Steps", []);
        yield "</h2>
<ol>
  <li>";
        // line 16
        yield t("In the <em>Manage</em> administrative menu, navigate to <em>Structure</em> &gt; @media_link.", ["@media_link" => $this->env->getExtension(\Drupal\Core\Template\TwigExtension::class)->renderVar(($context["media_link"] ?? null)), ]);
        yield "</li>
  <li>";
        // line 17
        yield t("If there is not already a media type for the type of media you want to use on your site, click <em>Add media type</em>.", []);
        yield "</li>
  <li>";
        // line 18
        yield t("Enter a <em>Name</em> and <em>Description</em> for your media type, and select the <em>Media source</em>.", []);
        yield "</li>
  <li>";
        // line 19
        yield t("For most media sources, there is additional information that will need to be stored with your media item, in a field on your media type. Under <em>Media source configuration</em>, select an existing field to re-use to store this information, or select <em> - Create -</em> to create a new field.", []);
        yield "</li>
  <li>";
        // line 20
        yield t("Note the types of metadata in the <em>Field mapping</em> section that can be mapped to fields on your media type.", []);
        yield "</li>
  <li>";
        // line 21
        yield t("Click <em>Save</em>.", []);
        yield "</li>
  <li>";
        // line 22
        yield t("Optionally, add additional fields for the metadata noted above or for other information that you want to store to your media type by clicking on <em>Manage fields</em> (see related topic below).", []);
        yield "</li>
  <li>";
        // line 23
        yield t("If you have added metadata fields, click <em>Edit</em>. Under <em>Field mapping</em>, select the fields you added for each piece of metadata information.", []);
        yield "</li>
  <li>";
        // line 24
        yield t("Click <em>Save</em>.", []);
        yield "</li>
  <li>";
        // line 25
        yield t("You can now use this media type by adding a Media reference field to any content entity sub-type. See related topic below.", []);
        yield "</li>
</ol>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@help_topics/media.media_type.html.twig";
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
        return array (  106 => 25,  102 => 24,  98 => 23,  94 => 22,  90 => 21,  86 => 20,  82 => 19,  78 => 18,  74 => 17,  70 => 16,  65 => 14,  61 => 13,  56 => 12,  54 => 11,  49 => 10,  47 => 9,  45 => 8,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@help_topics/media.media_type.html.twig", "/var/www/html/Koha-2025/core/modules/media/help_topics/media.media_type.html.twig");
    }
    
    public function ensureSecurityChecked(): void
    {
        if ($this->sandbox->isSandboxed($this->source)) {
            $this->checkSecurity();
        }
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 8, "trans" => 10];
        static $filters = ["escape" => 13];
        static $functions = ["render_var" => 8, "help_topic_link" => 8, "help_route_link" => 11];
        static $tests = [];

        try {
            $this->sandbox->checkSecurity(
                [0 => "set", 1 => "trans"],
                [0 => "escape"],
                [0 => "render_var", 1 => "help_topic_link", 2 => "help_route_link"],
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
