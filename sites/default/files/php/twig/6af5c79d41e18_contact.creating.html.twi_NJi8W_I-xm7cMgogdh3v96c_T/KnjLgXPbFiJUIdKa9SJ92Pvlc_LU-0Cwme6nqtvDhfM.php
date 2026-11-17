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

/* @help_topics/contact.creating.html.twig */
class __TwigTemplate_7b4f3d9c495b3cb6f331cd237d0be624 extends Template
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
        $context["contact_link_text"] = ('' === $tmp = implode('', iterator_to_array((function () use (&$context, $macros, $blocks) {
            yield t("Contact forms", []);
            yield from [];
        })(), false))) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 9
        $context["contact_link"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\help\HelpTwigExtension']->getRouteLink(($context["contact_link_text"] ?? null), "entity.contact_form.collection"));
        // line 10
        $context["adding_fields_topic"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\help\HelpTwigExtension']->getTopicLink("contact.adding_fields"));
        // line 11
        yield "<h2>";
        yield t("Goal", []);
        yield "</h2>
<p>";
        // line 12
        yield t("Create a new site-wide contact form.", []);
        yield "</p>
<h2>";
        // line 13
        yield t("Steps", []);
        yield "</h2>
<ol>
  <li>";
        // line 15
        yield t("In the <em>Manage</em> administrative menu, navigate to <em>Structure</em> &gt; <em>@contact_link</em>.", ["@contact_link" => $this->env->getExtension(\Drupal\Core\Template\TwigExtension::class)->renderVar(($context["contact_link"] ?? null)), ]);
        yield "</li>
  <li>";
        // line 16
        yield t("Click <em>Add contact form</em>.", []);
        yield "</li>
  <li>";
        // line 17
        yield t("Fill in the <em>Label</em> (title) for the form, <em>Recipients</em>, and optionally the other settings.", []);
        yield "</li>
  <li>";
        // line 18
        yield t("Click <em>Save</em>. You should see your new contact form in the table, along with a link to view it.", []);
        yield "</li>
  <li>";
        // line 19
        yield t("The contact form will always have <em>Subject</em> and <em>Message</em> fields. If you want to add more fields, follow the steps in @adding_fields_topic.", ["@adding_fields_topic" => $this->env->getExtension(\Drupal\Core\Template\TwigExtension::class)->renderVar(($context["adding_fields_topic"] ?? null)), ]);
        yield "</li>
</ol>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@help_topics/contact.creating.html.twig";
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
        return array (  84 => 19,  80 => 18,  76 => 17,  72 => 16,  68 => 15,  63 => 13,  59 => 12,  54 => 11,  52 => 10,  50 => 9,  45 => 8,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@help_topics/contact.creating.html.twig", "/var/www/html/Koha-2025/core/modules/contact/help_topics/contact.creating.html.twig");
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
        static $filters = ["escape" => 15];
        static $functions = ["render_var" => 9, "help_route_link" => 9, "help_topic_link" => 10];
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
