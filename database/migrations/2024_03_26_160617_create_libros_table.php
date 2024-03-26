use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLibroCategoriaTable extends Migration
{
    public function up()
    {
        Schema::create('libro_categoria', function (Blueprint $table) {
            $table->unsignedBigInteger('libro_id');
            $table->unsignedBigInteger('categoria_id');
            $table->primary(['libro_id', 'categoria_id']);
            $table->foreign('libro_id')->references('id')->on('libros')->onDelete('cascade');
            $table->foreign('categoria_id')->references('id')->on('categorias')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('libro_categoria');
    }
}


