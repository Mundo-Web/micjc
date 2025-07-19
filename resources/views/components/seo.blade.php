<script>
    // Establecer los valores SEO para la página
    @if ($title)
        document.title = '{{ $title }}';
    @endif
    
    @if ($description)
        document.querySelector('meta[name="description"]').setAttribute('content', '{{ $description }}');
    @endif
    
    @if ($keywords)
        document.querySelector('meta[name="keywords"]').setAttribute('content', '{{ $keywords }}');
    @endif
    
    @if ($ogTitle)
        document.querySelector('meta[property="og:title"]').setAttribute('content', '{{ $ogTitle }}');
        document.querySelector('meta[property="twitter:title"]').setAttribute('content', '{{ $ogTitle }}');
    @endif
    
    @if ($ogDescription)
        document.querySelector('meta[property="og:description"]').setAttribute('content', '{{ $ogDescription }}');
        document.querySelector('meta[property="twitter:description"]').setAttribute('content', '{{ $ogDescription }}');
    @endif
    
    @if ($ogImage)
        document.querySelector('meta[property="og:image"]').setAttribute('content', '{{ url($ogImage) }}');
        document.querySelector('meta[property="twitter:image"]').setAttribute('content', '{{ url($ogImage) }}');
    @endif
    
    @if ($canonicalUrl)
        // Buscar si existe un enlace canónico
        let canonicalLink = document.querySelector('link[rel="canonical"]');
        if (canonicalLink) {
            canonicalLink.setAttribute('href', '{{ $canonicalUrl }}');
        } else {
            // Crear uno nuevo si no existe
            canonicalLink = document.createElement('link');
            canonicalLink.setAttribute('rel', 'canonical');
            canonicalLink.setAttribute('href', '{{ $canonicalUrl }}');
            document.head.appendChild(canonicalLink);
        }
    @endif
</script>
