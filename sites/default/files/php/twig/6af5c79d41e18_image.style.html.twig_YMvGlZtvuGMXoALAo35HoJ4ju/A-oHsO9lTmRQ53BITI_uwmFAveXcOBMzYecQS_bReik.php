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

/* @help_topics/image.style.html.twig */
class __TwigTemplate_b36658c4cc7465cfa91b63b3e72e8fc2 extends Template
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
        $context["media_topic"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\help\HelpTwigExtension']->getTopicLink("core.media"));
        // line 9
        $context["styles_text"] = ('' === $tmp = implode('', iterator_to_array((function () use (&$context, $macros, $blocks) {
            yield t("Image styles", []);
            yield from [];
        })(), false))) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 10
        $context["styles_link"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\help\HelpTwigExtension']->getRouteLink(($context["styles_text"] ?? null), "entity.image_style.collection"));
        // line 11
        yield "<h2>";
        yield t("Goal", []);
        yield "</h2>
<p>";
        // line 12
        yield t("Add a new image style, which can be used to process and display images. See @media_topic for an overview of image styles.", ["@media_topic" => $this->env->getExtension(\Drupal\Core\Template\TwigExtension::class)->renderVar(($context["media_topic"] ?? null)), ]);
        yield "</p>
<h2>";
        // line 13
        yield t("Steps", []);
        yield "</h2>
<ol>
  <li>";
        // line 15
        yield t("In the <em>Manage</em> administrative menu, navigate to <em>Configuration</em> &gt; <em>Media</em> &gt; @styles_link.", ["@styles_link" => $this->env->getExtension(\Drupal\Core\Template\TwigExtension::class)->renderVar(($context["styles_link"] ?? null)), ]);
        yield "</li>
  <li>";
        // line 16
        yield t("Click <em>Add image style</em>.", []);
        yield "</li>
  <li>";
        // line 17
        yield t("Enter a descriptive <em>Image style name</em>, and click <em>Create new style</em>.", []);
        yield "</li>
  <li>";
        // line 18
        yield t("Under <em>Effect</em>, choose an effect to apply and click <em>Add</em>.", []);
        yield "</li>
  <li>";
        // line 19
        yield t("Configure the effect on the next page. Most effects require some additional configuration after they are added.  For example, for the <em>Crop</em> effect, enter the <em>Width</em> and <em>Height</em> to crop the image to, and choose the <em>Anchor</em> point. Click <em>Add effect</em>.", []);
        yield "</li>
  <li>";
        // line 20
        yield t("Repeat the previous two steps until all of the effects have been added.", []);
        yield "</li>
  <li>";
        // line 21
        yield t("Drag to change the order of the effects. Then click <em>Save</em> to save the new order.", []);
        yield "</li>
  <li>";
        // line 22
        yield t("The image style can now be used to format a field containing an image in your layouts or traditional field displays. It can also be used as part of a responsive image style. See related topics below for more information.", []);
        yield "</li>
</ol>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@help_topics/image.style.html.twig";
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
        return array (  96 => 22,  92 => 21,  88 => 20,  84 => 19,  80 => 18,  76 => 17,  72 => 16,  68 => 15,  63 => 13,  59 => 12,  54 => 11,  52 => 10,  47 => 9,  45 => 8,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@help_topics/image.style.html.twig", "/var/www/html/Koha-2025/core/modules/image/help_topics/image.style.html.twig");
    }
    
    public function ensureSecurityChecked(): void
    {
        if ($this->sandbox->isSandboxed($this->source)) {
            $this->checkSecurity();
        }
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 8, "trans" => 9];
        static $filters = ["escape" => 12];
        static $functions = ["render_var" => 8, "help_topic_link" => 8, "help_route_link" => 10];
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
