<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* themes/custom/tactis_evolve/templates/taxonomy/taxonomy-term--teaser.html.twig */
class __TwigTemplate_e486a3b3afc0412864f0d7c6f4822b19 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 26
        yield "
";
        // line 28
        $context["classes"] = ["taxonomy-term", ("vocabulary-" . \Drupal\Component\Utility\Html::getClass(CoreExtension::getAttribute($this->env, $this->source,         // line 30
($context["term"] ?? null), "bundle", [], "any", false, false, true, 30))), "row", "mb-5"];
        // line 35
        yield "<div";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "setAttribute", ["id", ("taxonomy-term-" . CoreExtension::getAttribute($this->env, $this->source, ($context["term"] ?? null), "id", [], "any", false, false, true, 35))], "method", false, false, true, 35), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 35), "html", null, true);
        yield ">
    <div class=\"title fs-5 fw-semibold col-12 col-md-4\">
        ";
        // line 37
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["name"] ?? null), "html", null, true);
        yield "
    </div>
    <div class=\"taxonomy-content col-12 col-md-8\">
        ";
        // line 40
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "description", [], "any", false, false, true, 40), "html", null, true);
        yield "
        <div class=\"text-tactis-secondary fw-semibold\">
            ";
        // line 42
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_services_heading", [], "any", false, false, true, 42), "html", null, true);
        yield "
        </div>
        <div class=\"d-lg-flex flex-lg-row flex-lg-nowrap\">
            <ul class=\"list-unstyled mb-0 me-5\">
            ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(0, (Twig\Extension\CoreExtension::length($this->env->getCharset(), (($_v0 = CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_services", [], "any", false, false, true, 46)) && is_array($_v0) || $_v0 instanceof ArrayAccess && in_array($_v0::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v0["#items"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_services", [], "any", false, false, true, 46), "#items", [], "array", false, false, true, 46))) - 1)));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 47
            yield "                ";
            if (((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 47) > 0) && (0 == CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 47) % 3))) {
                // line 48
                yield "                </ul>
                <ul class=\"list-unstyled mb-0 me-5\">
                ";
            }
            // line 51
            yield "                <li>";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (($_v1 = (($_v2 = CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_services", [], "any", false, false, true, 51)) && is_array($_v2) || $_v2 instanceof ArrayAccess && in_array($_v2::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v2[$context["i"]] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_services", [], "any", false, false, true, 51), $context["i"], [], "array", false, false, true, 51))) && is_array($_v1) || $_v1 instanceof ArrayAccess && in_array($_v1::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v1["#title"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, (($_v3 = CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_services", [], "any", false, false, true, 51)) && is_array($_v3) || $_v3 instanceof ArrayAccess && in_array($_v3::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v3[$context["i"]] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_services", [], "any", false, false, true, 51), $context["i"], [], "array", false, false, true, 51)), "#title", [], "array", false, false, true, 51)), "html", null, true);
            yield "</li>
            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        yield "            </ul>
        </div>
        <a href=\"";
        // line 55
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["url"] ?? null), "html", null, true);
        yield "\" class=\"btn btn-tactis-primary pt-3-5 pb-3 px-3-5 fs-small fw-semibold mt-4\">";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (($_v4 = (($_v5 = (($_v6 = CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_link_text", [], "any", false, false, true, 55)) && is_array($_v6) || $_v6 instanceof ArrayAccess && in_array($_v6::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v6[0] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_link_text", [], "any", false, false, true, 55), 0, [], "array", false, false, true, 55))) && is_array($_v5) || $_v5 instanceof ArrayAccess && in_array($_v5::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v5["#context"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, (($_v7 = CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_link_text", [], "any", false, false, true, 55)) && is_array($_v7) || $_v7 instanceof ArrayAccess && in_array($_v7::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v7[0] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_link_text", [], "any", false, false, true, 55), 0, [], "array", false, false, true, 55)), "#context", [], "array", false, false, true, 55))) && is_array($_v4) || $_v4 instanceof ArrayAccess && in_array($_v4::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v4["value"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, (($_v8 = (($_v9 = CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_link_text", [], "any", false, false, true, 55)) && is_array($_v9) || $_v9 instanceof ArrayAccess && in_array($_v9::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v9[0] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_link_text", [], "any", false, false, true, 55), 0, [], "array", false, false, true, 55))) && is_array($_v8) || $_v8 instanceof ArrayAccess && in_array($_v8::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v8["#context"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, (($_v10 = CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_link_text", [], "any", false, false, true, 55)) && is_array($_v10) || $_v10 instanceof ArrayAccess && in_array($_v10::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v10[0] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_link_text", [], "any", false, false, true, 55), 0, [], "array", false, false, true, 55)), "#context", [], "array", false, false, true, 55)), "value", [], "array", false, false, true, 55)), "html", null, true);
        yield "
            <i class=\"bi bi-arrow-right ms-3 fw-semibold\"></i>
        </a>
    </div>
</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["term", "attributes", "name", "content", "loop", "url"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/tactis_evolve/templates/taxonomy/taxonomy-term--teaser.html.twig";
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
        return array (  120 => 55,  116 => 53,  99 => 51,  94 => 48,  91 => 47,  74 => 46,  67 => 42,  62 => 40,  56 => 37,  50 => 35,  48 => 30,  47 => 28,  44 => 26,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/tactis_evolve/templates/taxonomy/taxonomy-term--teaser.html.twig", "/var/www/html/docroot/themes/custom/tactis_evolve/templates/taxonomy/taxonomy-term--teaser.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 28, "for" => 46, "if" => 47];
        static $filters = ["clean_class" => 30, "escape" => 35, "length" => 46];
        static $functions = ["range" => 46];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for', 'if'],
                ['clean_class', 'escape', 'length'],
                ['range'],
                $this->source
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
