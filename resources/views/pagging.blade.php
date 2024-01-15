<style type="text/css">

.page-item{
    border-bottom: 1px solid #ddd !important;
    border-top: 1px solid #ddd !important;
}


</style>

@if ($paginator->hasPages()) 
    <nav aria-label="Page navigation">
        <ul class="pagination">

            {{-- <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#" aria-label="Next"><span aria-hidden="true"><i class="fa fa-chevron-right" aria-hidden="true"></i></span> <span class="sr-only">Next</span></a></li> --}}

            @if ($paginator->onFirstPage()) 
            <li class="page-item"><a class="page-link" href="#" aria-label="Previous"><span aria-hidden="true"><i class="fa fa-chevron-left" aria-hidden="true"></i></span> <span class="sr-only">Previous</span></a></li> 
            @else 
            <li class="page-item"><a class="page-link" href="{{ $paginator->previousPageUrl() }}" aria-label="Previous"><span aria-hidden="true"><i class="fa fa-chevron-left" aria-hidden="true"></i></span> <span class="sr-only">Previous</span></a></li>
            @endif 
      
            @foreach ($elements as $element) 
            @if (is_string($element)) 
            <li class="page-item disabled">{{ $element }}</li> 
            @endif 
      
            @if (is_array($element)) 
            @foreach ($element as $page => $url) 
            @if ($page == $paginator->currentPage()) 
            <li class="page-item active"><a class="page-link" href="#">{{ $page }}</a></li>
            @else 
            <li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
            @endif 
            @endforeach 
            @endif 
            @endforeach 
            @if ($paginator->hasMorePages()) 
            <li class="page-item"><a class="page-link" href="{{ $paginator->nextPageUrl() }}" aria-label="Next"><span aria-hidden="true"><i class="fa fa-chevron-right" aria-hidden="true"></i></span> <span class="sr-only">Next</span></a></li>
            @else 
            <li class="page-item"><a class="page-link" href="#" aria-label="Next"><span aria-hidden="true"><i class="fa fa-chevron-right" aria-hidden="true"></i></span> <span class="sr-only">Next</span></a></li>
            @endif 
        </ul> 
    </nav> 

@endif 