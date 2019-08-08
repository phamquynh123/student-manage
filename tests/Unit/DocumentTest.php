<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Repositories\DocumentRepository;
use App\Models\Document;
use Faker\Factory as Faker;

class DocumentTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    protected $document;

    public function setUp() : void
    {
        parent::setUp();
        $this->faker = Faker::create();
        // chuẩn bị dữ liệu test
        $this->document = [
            'title' => $this->faker->sentence($nbWords = 6, $variableNbWords = true),
            'content' => $this->faker->realText($maxNbChars = 200, $indexSize = 2),
            'slug' => $this->faker->slug,
            'subject_id' => 1,
        ];
        // khởi tạo lớp DocumentRepository
        $this->DocumentRepository = new DocumentRepository();
    }

    public function tearDown() : void
    {
        parent::tearDown();
    }

    /**
     * A basic unit test example 1.
     *
     * @return void
     */
    public function testExample1()
    {
        // Gọi hàm tạo
        $document = $this->DocumentRepository->create($this->document);
        // Kiểm tra xem kết quả trả về có là thể hiện của lớp document hay không
        $this->assertInstanceOf(Document::class, $document);
        // Kiểm tra data trả về
        $this->assertEquals($this->document['title'], $document->title);
        $this->assertEquals($this->document['content'], $document->content);
        $this->assertEquals($this->document['slug'], $document->slug);
        $this->assertEquals($this->document['subject_id'], $document->subject_id);
        // Kiểm tra dữ liệu có tồn tại trong cơ sở dữ liệu hay không
        $this->assertDatabaseHas('documents', $this->document);
    }

    public function testShow()
    {
        $document = $this->DocumentRepository->create($this->document);
        $found = $this->DocumentRepository->find($document->id);

        $this->assertEquals($found['title'], $document->title);
        $this->assertEquals($found['content'], $document->content);
        $this->assertEquals($found['slug'], $document->slug);
        $this->assertEquals($found['subject_id'], $document->subject_id);
    }

    public function testUpdate()
    {
        $this->faker = Faker::create();
        $document = Document::create([
            'title' => $this->faker->sentence($nbWords = 6, $variableNbWords = true),
            'content' => $this->faker->realText($maxNbChars = 200, $indexSize = 2),
            'slug' => $this->faker->slug,
            'subject_id' => 1,
        ]);
        $result = $document->update([
            'title' => 'daupdate@test.com',
        ]);
        $this->assertEquals(true, $result);
    }

    public function testDestroy()
    {
        $document = $this->DocumentRepository->create($this->document);
        $deleteDocument = $this->DocumentRepository->delete($document->id);
        // Kiểm tra dữ liệu có trả về true hay không
        $this->assertTrue($deleteDocument);
        // kiểm tra xem dữ liệu đã được xóa trong cơ sở dữ liệu hay chưa
        $this->assertDatabaseMissing('documents', $document->toArray());
    }
}
